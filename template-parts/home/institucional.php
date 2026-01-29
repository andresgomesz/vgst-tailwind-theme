<?php
    /**
     * template-parts/sections/institucional.php
     * Versión que usa SOLO clases de Tailwind.
     */
?>

<section class="bg-white py-8 sm:py-12 md:py-16 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        <!-- Sección principal -->
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 mb-10 sm:mb-12 md:mb-16">
            
            <!-- Imagen - Ancho fijo de 423px -->
            <div class="w-full lg:w-auto">
                <div class="w-full lg:w-[423px] aspect-[4/3] sm:aspect-[3/2] lg:aspect-auto lg:h-[454px] bg-gray-100 overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.jpg" 
                         alt="Profesionales trabajando"
                         class="w-full h-full object-cover"
                         width="423"
                         height="454"
                         loading="lazy">
                </div>
            </div>
            
            <!-- Contenido - Ancho máximo de 594px -->
            <div class="w-full lg:flex-1 lg:max-w-[594px]">
                <!-- Contenedor relativo para la flecha -->
                <div class="relative">
                    <!-- Flecha decorativa - Solo visible en desktop -->
                    <div class="hidden lg:block absolute top-10 right-[-200px] z-0"
                         style="transform: rotate(15deg);">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/flecha-inst.png" 
                             alt="Decoración"
                             class="w-[401px] h-[401px] object-contain opacity-90"
                             width="401"
                             height="401"
                             loading="lazy">
                    </div>
                    
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 sm:mb-6 relative z-10">
                        Profesionales y <span class="text-[#3E509D]">CERCANOS</span>
                    </h2>
                </div>
                
                <div class="space-y-4 sm:space-y-5 mb-6 sm:mb-8 lg:max-w-[550px]">
                    <p class="text-gray-700 text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[32px]">
                        Por eso, en <span class="font-semibold text-[#3E509D]">XXXXXX</span> estamos en constante desarrollo en los materiales y técnicas de la construcción modular prefabricada.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[32px]">
                        Contamos con un excelente equipo de ingenieros, delineantes, técnicos y montadores con experiencia y profesionalidad con el fin de que el cliente siempre tenga el mejor resultado posible.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[32px]">
                        Nos encanta asesorarte e intentar dar solución a tus inquietudes y proyectos y para ello creemos en el trato personal y humano para poder resolver todas tus dudas.
                    </p>
                </div>
                
                <a href="#contacto" 
                   class="inline-flex items-center justify-center border-2 border-[#9FCE00] text-[#3E509D] font-bold py-3 px-8 rounded-full hover:bg-[#9FCE00] hover:text-white transition-all duration-300 text-sm sm:text-base w-full sm:w-auto">
                    CONTACTA CON NOSOTROS
                </a>
            </div>
            
        </div>
        
        <!-- Servicios - Layout horizontal con img + título al lado -->
        <div class="bg-[#E8EDEF66] rounded-lg p-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 divide-y lg:divide-y-0 lg:divide-x divide-[#3E509D]/20">
                
                <!-- Servicio 1 -->
                <div class="flex items-center p-3 sm:p-4 lg:px-4 xl:px-6">
                    <!-- Imagen ubi.svg 64x64 -->
                    <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded flex items-center justify-center mr-3 sm:mr-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ubi.svg" 
                             alt="Punto de venta"
                             class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 object-contain"
                             width="64"
                             height="64"
                             loading="lazy">
                    </div>
                    <!-- Título -->
                    <h3 class="text-[#3E509D] font-bold text-sm sm:text-base">
                        Punto de venta de panel sándwich
                    </h3>
                </div>
                
                <!-- Servicio 2 -->
                <div class="flex items-center p-3 sm:p-4 lg:px-4 xl:px-6 lg:border-l border-[#3E509D]/20">
                    <!-- Imagen tools.svg 64x64 -->
                    <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded flex items-center justify-center mr-3 sm:mr-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tools.svg" 
                             alt="Diseño y fabricación"
                             class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 object-contain"
                             width="64"
                             height="64"
                             loading="lazy">
                    </div>
                    <h3 class="text-[#3E509D] font-bold text-sm sm:text-base">
                        Diseño y fabricación de estructuras
                    </h3>
                </div>
                
                <!-- Servicio 3 -->
                <div class="flex items-center p-3 sm:p-4 lg:px-4 xl:px-6 lg:border-l border-[#3E509D]/20">
                    <!-- Imagen trabajo.svg 64x64 -->
                    <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded flex items-center justify-center mr-3 sm:mr-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/trabajo.svg" 
                             alt="Ingeniería"
                             class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 object-contain"
                             width="64"
                             height="64"
                             loading="lazy">
                    </div>
                    <h3 class="text-[#3E509D] font-bold text-sm sm:text-base">
                        Ingeniería
                    </h3>
                </div>
                
                <!-- Servicio 4 -->
                <div class="flex items-center p-3 sm:p-4 lg:px-4 xl:px-6 lg:border-l border-[#3E509D]/20">
                    <!-- Imagen construccion.svg 64x64 -->
                    <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded flex items-center justify-center mr-3 sm:mr-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/construccion.svg" 
                             alt="Construcción modular"
                             class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 object-contain"
                             width="64"
                             height="64"
                             loading="lazy">
                    </div>
                    <h3 class="text-[#3E509D] font-bold text-sm sm:text-base">
                        Construcción modular prefabricada
                    </h3>
                </div>
                
            </div>
        </div>
        
    </div>
</section>