<?php
// template-parts/sections/beneficios-optimized.php
?>

<section class="bg-white w-full min-h-[390px] flex items-center">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 md:py-16">
        
        <!-- Contenedor del título con imagen subrayado -->
        <div class="text-center mb-10 sm:mb-14 md:mb-15">
            <h2 class="font-roboto font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-[36px] leading-tight lg:leading-[68.87px]">
                <span class="text-[#3E509D]">¿Por qué nuestro </span>
                <span class="text-[#9FCE00] relative inline-block">
                    PANEL SÁNDWICH
                    <!-- Imagen subrayado (15px de separación) -->
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-40 sm:w-48 md:w-56 lg:w-[270px] h-3 sm:h-4 md:h-5 lg:h-[25px] mt-2 sm:mt-3">
                        <!-- Placeholder para imagen subrayadone.png -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/subrayadoone.png" 
                             alt="Subrayado" 
                             class="w-full h-full object-contain"
                             loading="lazy">
                        <!-- Fallback si no hay imagen -->
                        <div class="w-full h-full bg-gradient-to-r from-transparent via-[#9FCE00]/40 to-transparent hidden"></div>
                    </div>
                </span>
                <span class="text-[#3E509D]">?</span>
            </h2>
        </div>
        
        <!-- Grid de beneficios con separación de 20px en desktop -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-5 pb-12 sm:pb-16 md:pb-20 lg:pb-[50px]">
            
            <!-- Beneficio 1 - Atención personalizada -->
            <div class="bg-[#E8EDEF66] rounded-[10px] p-5 sm:p-6 h-auto min-h-[120px] sm:min-h-[129px] flex items-center justify-center hover:bg-[#E8EDEF] transition-colors duration-300">
                <div class="flex items-center justify-center space-x-4 sm:space-x-5 lg:space-x-[20px] w-full">
                    <!-- Imagen help.svg 77x77 -->
                    <div class="w-16 h-16 sm:w-18 sm:h-18 md:w-20 md:h-20 lg:w-[77px] lg:h-[77px] flex items-center justify-center flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/help.svg" 
                             alt="Atención personalizada" 
                             class="w-full h-full object-contain"
                             loading="lazy">
                    </div>
                    <!-- Texto -->
                    <div class="flex-1 min-w-0">
                        <h3 class="font-roboto font-semibold text-base sm:text-base text-[#3E509D] text-center lg:text-left leading-snug">
                            Atención real y personalizada
                        </h3>
                    </div>
                </div>
            </div>
            
            <!-- Beneficio 2 - Asesoramiento técnico -->
            <div class="bg-[#E8EDEF66] rounded-[10px] p-5 sm:p-6 h-auto min-h-[120px] sm:min-h-[129px] flex items-center justify-center hover:bg-[#E8EDEF] transition-colors duration-300">
                <div class="flex items-center justify-center space-x-4 sm:space-x-5 lg:space-x-[20px] w-full">
                    <!-- Imagen obrero.svg 65x77 -->
                    <div class="w-14 h-16 sm:w-16 sm:h-18 md:w-18 md:h-20 lg:w-[65px] lg:h-[77px] flex items-center justify-center flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/obrero.svg" 
                             alt="Asesoramiento técnico" 
                             class="w-full h-full object-contain"
                             loading="lazy">
                    </div>
                    <!-- Texto -->
                    <div class="flex-1 min-w-0">
                        <h3 class="font-roboto font-semibold text-base sm:text-base text-[#3E509D] text-center lg:text-left leading-snug">
                            Asesoramiento técnico especializado
                        </h3>
                    </div>
                </div>
            </div>
            
            <!-- Beneficio 3 - Logística -->
            <div class="bg-[#E8EDEF66] rounded-[10px] p-5 sm:p-6 h-auto min-h-[120px] sm:min-h-[129px] flex items-center justify-center hover:bg-[#E8EDEF] transition-colors duration-300">
                <div class="flex items-center justify-center space-x-4 sm:space-x-5 lg:space-x-[20px] w-full">
                    <!-- Imagen cambion.svg 85x54 -->
                    <div class="w-20 h-12 sm:w-22 sm:h-14 md:w-24 md:h-16 lg:w-[85px] lg:h-[54px] flex items-center justify-center flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cambion.svg" 
                             alt="Logística eficiente" 
                             class="w-full h-full object-contain"
                             loading="lazy">
                    </div>
                    <!-- Texto -->
                    <div class="flex-1 min-w-0">
                        <h3 class="font-roboto font-semibold text-base sm:text-base text-[#3E509D] text-center lg:text-left leading-snug">
                            Logística eficiente y adaptable
                        </h3>
                    </div>
                </div>
            </div>
            
            <!-- Beneficio 4 - Compromiso calidad -->
            <div class="bg-[#E8EDEF66] rounded-[10px] p-5 sm:p-6 h-auto min-h-[120px] sm:min-h-[129px] flex items-center justify-center hover:bg-[#E8EDEF] transition-colors duration-300">
                <div class="flex items-center justify-center space-x-4 sm:space-x-5 lg:space-x-[20px] w-full">
                    <!-- Imagen medalla.svg 46x67 -->
                    <div class="w-10 h-14 sm:w-12 sm:h-16 md:w-14 md:h-18 lg:w-[46px] lg:h-[67px] flex items-center justify-center flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/medalla.svg" 
                             alt="Compromiso calidad" 
                             class="w-full h-full object-contain"
                             loading="lazy">
                    </div>
                    <!-- Texto -->
                    <div class="flex-1 min-w-0">
                        <h3 class="font-roboto font-semibold text-base sm:text-base text-[#3E509D] text-center lg:text-left leading-snug">
                            Compromiso con la calidad
                        </h3>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>