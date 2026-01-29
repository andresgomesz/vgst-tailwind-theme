// assets/js/modules/resenas-slider.js

class ResenasSlider {
    constructor() {
        this.track = document.getElementById('resenas-track');
        this.prevBtn = document.getElementById('prev-resena');
        this.nextBtn = document.getElementById('next-resena');
        this.cards = document.querySelectorAll('#resenas-track > div');
        
        if (!this.track || this.cards.length === 0) return;
        
        this.cardsPerView = 1;
        this.currentIndex = 0;
        this.isDragging = false;
        this.startX = 0;
        
        this.init();
    }
    
    init() {
        this.updateCardsPerView();
        this.bindEvents();
        this.moveSlider();
        
        // Inicializar en resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const oldCardsPerView = this.cardsPerView;
                this.updateCardsPerView();
                
                if (oldCardsPerView !== this.cardsPerView) {
                    this.currentIndex = Math.min(this.currentIndex, this.cards.length - this.cardsPerView);
                    this.moveSlider();
                }
            }, 250);
        });
    }
    
    updateCardsPerView() {
        if (window.innerWidth >= 1024) {
            this.cardsPerView = 3;
        } else if (window.innerWidth >= 640) {
            this.cardsPerView = 2;
        } else {
            this.cardsPerView = 1;
        }
    }
    
    moveSlider() {
        const cardWidth = 100 / this.cardsPerView;
        const translateX = -this.currentIndex * cardWidth;
        this.track.style.transform = `translateX(${translateX}%)`;
        
        // Actualizar estado de botones
        this.updateButtonStates();
    }
    
    updateButtonStates() {
        const isAtStart = this.currentIndex === 0;
        const isAtEnd = this.currentIndex >= this.cards.length - this.cardsPerView;
        
        // Botón anterior
        this.prevBtn.disabled = isAtStart;
        if (isAtStart) {
            this.prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
            this.prevBtn.classList.remove('hover:bg-[#3E509D]');
        } else {
            this.prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            this.prevBtn.classList.add('hover:bg-[#3E509D]');
        }
        
        // Botón siguiente
        this.nextBtn.disabled = isAtEnd;
        if (isAtEnd) {
            this.nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
            this.nextBtn.classList.remove('hover:bg-[#3E509D]');
        } else {
            this.nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            this.nextBtn.classList.add('hover:bg-[#3E509D]');
        }
    }
    
    bindEvents() {
        // Botones
        this.prevBtn.addEventListener('click', () => this.prevSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());
        
        // Touch events
        this.track.addEventListener('touchstart', (e) => this.handleTouchStart(e), { passive: true });
        this.track.addEventListener('touchmove', (e) => this.handleTouchMove(e), { passive: true });
        this.track.addEventListener('touchend', (e) => this.handleTouchEnd(e), { passive: true });
    }
    
    prevSlide() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.moveSlider();
        }
    }
    
    nextSlide() {
        if (this.currentIndex < this.cards.length - this.cardsPerView) {
            this.currentIndex++;
            this.moveSlider();
        }
    }
    
    handleTouchStart(e) {
        this.startX = e.touches[0].clientX;
        this.isDragging = true;
        this.track.style.transition = 'none';
    }
    
    handleTouchMove(e) {
        if (!this.isDragging) return;
        
        const currentX = e.touches[0].clientX;
        const diff = this.startX - currentX;
        const cardWidth = this.track.offsetWidth / this.cardsPerView;
        const translateX = (-this.currentIndex * 100 / this.cardsPerView) - (diff / cardWidth * 100);
        this.track.style.transform = `translateX(${translateX}%)`;
    }
    
    handleTouchEnd(e) {
        if (!this.isDragging) return;
        
        this.track.style.transition = 'transform 0.5s ease-in-out';
        const endX = e.changedTouches[0].clientX;
        const diff = this.startX - endX;
        const threshold = 50;
        
        if (diff > threshold && this.currentIndex < this.cards.length - this.cardsPerView) {
            this.currentIndex++;
        } else if (diff < -threshold && this.currentIndex > 0) {
            this.currentIndex--;
        }
        
        this.moveSlider();
        this.isDragging = false;
    }
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    new ResenasSlider();
});

// Exportar para uso modular (opcional)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = ResenasSlider;
}