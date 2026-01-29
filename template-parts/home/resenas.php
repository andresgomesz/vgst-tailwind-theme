<?php
// template-parts/sections/resenas-clientes.php
?>

<section class="bg-[#E8EDEF] py-8 sm:py-12 md:py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        <!-- Encabezado con título centrado y botones a la derecha -->
        <div class="relative flex items-center justify-center mb-8 sm:mb-10 md:mb-12">
            
            <!-- Título ABSOLUTAMENTE CENTRADO -->
            <div class="absolute left-1/2 transform -translate-x-1/2">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#3E509D] text-center whitespace-nowrap">
                    Reseñas de <span class="text-[#9FCE00]">CLIENTES</span>
                </h2>
            </div>
            
            <!-- Contenedor para empujar botones a la derecha - Oculto en móvil -->
            <div class="ml-auto hidden sm:block">
                <!-- Controles del slider -->
                <div class="flex items-center space-x-3">
                    <!-- Botón anterior -->
                    <button id="prev-resena" 
                            class="cursor-pointer w-14 h-14 bg-white border-[1.94px] border-[#3E509D] rounded-full flex items-center justify-center hover:bg-[#3E509D] transition-all duration-300 group"
                            aria-label="Reseña anterior">
                        <svg class="w-6 h-6 text-[#3E509D] group-hover:text-white transition-colors" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    
                    <!-- Botón siguiente -->
                    <button id="next-resena" 
                            class="cursor-pointer w-14 h-14 bg-white border-[1.94px] border-[#3E509D] rounded-full flex items-center justify-center hover:bg-[#3E509D] transition-all duration-300 group"
                            aria-label="Siguiente reseña">
                        <svg class="w-6 h-6 text-[#3E509D] group-hover:text-white transition-colors" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
            
        </div>
        
        <!-- Resto del slider (se mantiene igual) -->
        <div class="relative">
            <div id="resenas-slider" class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out" id="resenas-track">
                    
                    <!-- Card 1 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                        <div class="bg-white p-6 h-[274px] flex flex-col">
                            <div class="flex items-start mb-4">
                                <div class="w-15 h-15 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/person.jpg" 
                                         alt="Carlos Javier"
                                         class="w-full h-full object-cover"
                                         width="60"
                                         height="60"
                                         loading="lazy">
                                </div>
                                <div class="w-[2px] h-14 mx-4 bg-[#9FCE00] flex-shrink-0"></div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-center mb-1">
                                        <h3 class="font-bold text-[#3E509D] text-sm sm:text-base">Carlos Javier</h3>
                                        <div class="flex space-x-0.5">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-[17px] h-[17px] text-[#EEC044]" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs sm:text-sm text-[#1F1E1780]">30/01/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow overflow-y-auto">
                                <p class="text-gray-700 text-sm sm:text-base leading-relaxed font-sans pt-[20px]">
                                    Me considero un cliente satisfecho. Me asesoraron como ninguna otra empresa. Cumplieron en los tiempos y excelente trato humano.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                        <div class="bg-white p-6 h-[274px] flex flex-col">
                            <div class="flex items-start mb-4">
                                <div class="w-15 h-15 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/person.jpg" 
                                         alt="Ana Martínez"
                                         class="w-full h-full object-cover"
                                         width="60"
                                         height="60"
                                         loading="lazy">
                                </div>
                                <div class="w-[2px] h-14 mx-4 bg-[#9FCE00] flex-shrink-0"></div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-center mb-1">
                                        <h3 class="font-bold text-[#3E509D] text-sm sm:text-base">Ana Martínez</h3>
                                        <div class="flex space-x-0.5">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-[17px] h-[17px] text-[#EEC044]" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs sm:text-sm text-[#1F1E1780]">15/02/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow overflow-y-auto">
                                <p class="text-gray-700 text-sm sm:text-base leading-relaxed font-sans pt-[20px]">
                                    Excelente servicio y atención personalizada. Los paneles de calidad superior y la instalación impecable. Totalmente recomendados.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cards 3-6 (actualizadas con la misma imagen) -->
                    <!-- Card 3 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                        <div class="bg-white p-6 h-[274px] flex flex-col">
                            <div class="flex items-start mb-4">
                                <div class="w-15 h-15 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/person.jpg" 
                                         alt="Cliente"
                                         class="w-full h-full object-cover"
                                         width="60"
                                         height="60"
                                         loading="lazy">
                                </div>
                                <div class="w-[2px] h-14 mx-4 bg-[#9FCE00] flex-shrink-0"></div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-center mb-1">
                                        <h3 class="font-bold text-[#3E509D] text-sm sm:text-base">Miguel Rodríguez</h3>
                                        <div class="flex space-x-0.5">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-[17px] h-[17px] text-[#EEC044]" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs sm:text-sm text-[#1F1E1780]">22/02/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow overflow-y-auto">
                                <p class="text-gray-700 text-sm sm:text-base leading-relaxed font-sans pt-[20px]">
                                    Profesionalidad y calidad excepcionales. El equipo técnico resolvió todas nuestras dudas y el resultado final superó expectativas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                        <div class="bg-white p-6 h-[274px] flex flex-col">
                            <div class="flex items-start mb-4">
                                <div class="w-15 h-15 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/person.jpg" 
                                         alt="Cliente"
                                         class="w-full h-full object-cover"
                                         width="60"
                                         height="60"
                                         loading="lazy">
                                </div>
                                <div class="w-[2px] h-14 mx-4 bg-[#9FCE00] flex-shrink-0"></div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-center mb-1">
                                        <h3 class="font-bold text-[#3E509D] text-sm sm:text-base">Laura González</h3>
                                        <div class="flex space-x-0.5">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-[17px] h-[17px] text-[#EEC044]" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs sm:text-sm text-[#1F1E1780]">05/03/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow overflow-y-auto">
                                <p class="text-gray-700 text-sm sm:text-base leading-relaxed font-sans pt-[20px]">
                                    Increíble atención al cliente. Nos guiaron en cada paso del proceso y el material es de primera calidad. ¡Muy recomendables!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                        <div class="bg-white p-6 h-[274px] flex flex-col">
                            <div class="flex items-start mb-4">
                                <div class="w-15 h-15 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/person.jpg" 
                                         alt="Cliente"
                                         class="w-full h-full object-cover"
                                         width="60"
                                         height="60"
                                         loading="lazy">
                                </div>
                                <div class="w-[2px] h-14 mx-4 bg-[#9FCE00] flex-shrink-0"></div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-center mb-1">
                                        <h3 class="font-bold text-[#3E509D] text-sm sm:text-base">Roberto Sánchez</h3>
                                        <div class="flex space-x-0.5">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-[17px] h-[17px] text-[#EEC044]" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs sm:text-sm text-[#1F1E1780]">18/03/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow overflow-y-auto">
                                <p class="text-gray-700 text-sm sm:text-base leading-relaxed font-sans pt-[20px]">
                                    Trabajo impecable y cumplimiento de plazos. Los paneles sándwich son perfectos para nuestro almacén. Repetiremos sin duda.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                        <div class="bg-white p-6 h-[274px] flex flex-col">
                            <div class="flex items-start mb-4">
                                <div class="w-15 h-15 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/person.jpg" 
                                         alt="Cliente"
                                         class="w-full h-full object-cover"
                                         width="60"
                                         height="60"
                                         loading="lazy">
                                </div>
                                <div class="w-[2px] h-14 mx-4 bg-[#9FCE00] flex-shrink-0"></div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-center mb-1">
                                        <h3 class="font-bold text-[#3E509D] text-sm sm:text-base">Sofía Ramírez</h3>
                                        <div class="flex space-x-0.5">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-[17px] h-[17px] text-[#EEC044]" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs sm:text-sm text-[#1F1E1780]">25/03/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow overflow-y-auto">
                                <p class="text-gray-700 text-sm sm:text-base leading-relaxed font-sans pt-[20px]">
                                    Excelente relación calidad-precio. El servicio postventa también es excelente. Una empresa seria y confiable 100%.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</section>