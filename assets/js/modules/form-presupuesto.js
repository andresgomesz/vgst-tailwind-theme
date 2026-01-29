// assets/js/form-presupuesto.js
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.presupuesto-form');
    
    forms.forEach(form => {
        form.addEventListener('submit', handleFormSubmit);
        
        // Validación en tiempo real
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('blur', validateField);
            input.addEventListener('input', clearFieldError);
        });
    });
    
    function handleFormSubmit(e) {
        e.preventDefault();
        const form = e.target;
        
        if (validateForm(form)) {
            submitForm(form);
        }
    }
    
    function validateForm(form) {
        let isValid = true;
        
        // Validar campos requeridos
        form.querySelectorAll('[required]').forEach(field => {
            if (field.type === 'checkbox') {
                if (!field.checked) {
                    showError(field, 'Debe aceptar este campo');
                    isValid = false;
                }
            } else if (!field.value.trim()) {
                showError(field, 'Este campo es obligatorio');
                isValid = false;
            }
        });
        
        // Validar email
        const emailField = form.querySelector('input[type="email"]');
        if (emailField && emailField.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailField.value)) {
                showError(emailField, 'Email no válido');
                isValid = false;
            }
        }
        
        return isValid;
    }
    
    function submitForm(form) {
        // Código para enviar con AJAX a WordPress
        const formData = new FormData(form);
        
        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('¡Formulario enviado con éxito!');
                form.reset();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un error al enviar el formulario');
        });
    }
    
    function showError(field, message) {
        field.classList.add('border-red-500');
        
        // Crear o actualizar mensaje de error
        let errorElement = field.nextElementSibling;
        if (!errorElement || !errorElement.classList.contains('error-message')) {
            errorElement = document.createElement('p');
            errorElement.className = 'error-message text-red-500 text-xs mt-1';
            field.parentNode.appendChild(errorElement);
        }
        errorElement.textContent = message;
    }
    
    function clearFieldError(e) {
        const field = e.target;
        field.classList.remove('border-red-500');
        
        const errorElement = field.nextElementSibling;
        if (errorElement && errorElement.classList.contains('error-message')) {
            errorElement.remove();
        }
    }
});