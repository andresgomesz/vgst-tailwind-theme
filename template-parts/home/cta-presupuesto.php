<section class="py-8 px-4 sm:py-12 md:px-8 bg-[#E8EDEF] lg:pb-0">
    <div class="container mx-auto ">
        <!-- Título con subrayado -->
        <div class="text-center mb-6 sm:mb-8 md:mb-10">
            <h2 class="text-2xl sm:text-3xl md:text-[36px] font-semibold leading-tight md:leading-[57.6px]">
                <span class="text-[#3E509D]">Pide </span>
                <span class="text-[#9FCE00] relative inline-block">
                    PRESUPUESTO
                    <!-- Imagen subrayado -->
                    <div class="absolute -bottom-[15px] left-1/2 transform -translate-x-1/2 w-40 sm:w-48 md:w-56 lg:w-[270px] h-3 sm:h-4 md:h-5 lg:h-[25px] mt-2 sm:mt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/subrayadoone.png" 
                             alt="Subrayado" 
                             class="w-full h-full object-contain"
                             loading="lazy">
                    </div>
                </span>
            </h2>
        </div>
        
        <form class="presupuesto-form p-4 sm:p-6 md:p-10 rounded-xl lg:pb-0" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
            <input type="hidden" name="action" value="enviar_presupuesto">
            <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('presupuesto_nonce'); ?>">

            <!-- Primera fila: Nombre, Teléfono, Email - Mobile: columna, Tablet+: grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 md:gap-6 mb-4 sm:mb-6">
                <!-- Nombre -->
                <div class="w-full">
                    <label class="block text-xs sm:text-sm font-semibold text-[#4F5665] mb-1 sm:mb-2">
                        Nombre *
                    </label>
                    <input type="text" 
                           placeholder="Nombre"
                           required
                           class="placeholder:text-[#58617A] xl:w-[400px] bg-white w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                </div>
                
                <!-- Teléfono -->
                <div class="w-full">
                    <label class="block text-xs sm:text-sm font-semibold text-[#4F5665] mb-1 sm:mb-2">
                        Teléfono
                    </label>
                    <input type="tel" 
                           placeholder="+34"
                           required
                           class="placeholder:text-[#58617A] xl:w-[400px] bg-white w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                </div>
                
                <!-- Email -->
                <div class="w-full sm:col-span-2 lg:col-span-1">
                    <!-- En tablet (sm) ocupa 2 columnas, en desktop (lg) 1 columna -->
                    <label class="block text-xs sm:text-sm font-semibold text-[#4F5665] mb-1 sm:mb-2">
                        Correo electrónico *
                    </label>
                    <input type="email" 
                           placeholder="mail@mail.com"
                           required
                           class="placeholder:text-[#58617A] xl:w-[400px] bg-white w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                </div>
            </div>
            
            <!-- Segunda fila: Material, Metros, Provincia -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 md:gap-6 mb-6 sm:mb-8">
                <!-- Material -->
                <div class="w-full">
                    <label class="block text-xs sm:text-sm font-semibold text-[#4F5665] mb-1 sm:mb-2">
                        Material *
                    </label>
                    <select 
  required 
  class="text-[#58617A] xl:w-[400px] bg-white w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none transition-all duration-200 custom-select"
>
                        <option value="" disabled selected class="text-gray-400">Material</option>
                        <option value="cubierta" class="text-gray-800">Panel sándwich Cubierta</option>
                        <option value="fachada" class="text-gray-800">Panel sándwich Fachada</option>
                        <option value="lana-roca" class="text-gray-800">Panel sándwich Lana de Roca</option>
                    </select>
                </div>
                
                <!-- Metros cuadrados -->
                <div class="w-full">
                    <label class="block text-xs sm:text-sm font-semibold text-[#4F5665] mb-1 sm:mb-2">
                        Metros cuadrados *
                    </label>
                    <div class="relative">
                        <input type="number" 
                               placeholder="m²"
                               required
                               min="1"
                               class="placeholder:text-[#58617A] xl:w-[400px] bg-white w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                        <span class="absolute right-3 sm:right-4 top-1/2 transform -translate-y-1/2 text-[#4F5665] text-sm sm:text-base">m²</span>
                    </div>
                </div>
                
                <!-- Provincia -->
                <div class="w-full sm:col-span-2 lg:col-span-1">
                    <label class="block text-xs sm:text-sm font-semibold text-[#4F5665] mb-1 sm:mb-2">
                        Provincia de entrega *
                    </label>
                    <select required
                            class="custom-select text-[#58617A] xl:w-[400px] bg-white w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none bg-transparent bg-[url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="%2325d366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>')] bg-[length:14px_14px] bg-[right_0.75rem_center] sm:bg-[right_1rem_center] bg-no-repeat transition-all duration-200">
                        <option value="" disabled selected class="text-gray-400">Seleccione provincia</option>
                        <option value="madrid" class="text-gray-800">Madrid</option>
                        <option value="barcelona" class="text-gray-800">Barcelona</option>
                        <option value="valencia" class="text-gray-800">Valencia</option>
                        <option value="sevilla" class="text-gray-800">Sevilla</option>
                        <option value="zaragoza" class="text-gray-800">Zaragoza</option>
                        <option value="bilbao" class="text-gray-800">Bilbao</option>
                    </select>
                </div>
            </div>
            
            <!-- Checkboxes - En móvil se apilan verticalmente -->
            <div class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
                <!-- Checkbox 1 -->
                <div class="flex items-start">
                    <div class="flex items-center h-4 sm:h-5 mt-0.5">
                        <input type="checkbox" 
                               id="comercial"
                               class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    </div>
                    <label for="comercial" class="ml-2 sm:ml-3 text-xs sm:text-sm text-gray-700 leading-tight sm:leading-normal">
                        Acepto recibir información comercial, así como descuentos, promociones y actualizaciones de producto pertinentes.
                    </label>
                </div>
                
                <!-- Checkbox 2 (pre-seleccionado) -->
                <div class="flex items-start">
                    <div class="flex items-center h-4 sm:h-5 mt-0.5">
                        <input type="checkbox" 
                               id="privacidad"
                               checked
                               required
                               class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    </div>
                    <label for="privacidad" class="ml-2 sm:ml-3 text-xs sm:text-sm text-gray-700 leading-tight sm:leading-normal">
                        Confirmo que he leído y aceptado la <a href="#" class="text-blue-600 hover:underline">política de privacidad</a> y <a href="#" class="text-blue-600 hover:underline">venta</a>.<span class="text-red-500">*</span>
                    </label>
                </div>
            </div>
            
            <!-- Botón - Ancho completo en móvil, máximo 300px en tablet+ -->
            <div class="text-center relative lg:top-[22px]">
                <button type="submit" 
                        class="cursor-pointer bg-[#3E509D] hover:bg-[#2C3E7A] text-white font-bold py-2.5 sm:py-3 px-6 sm:px-8 rounded-full transition-all duration-300 transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-[#3E509D] focus:ring-offset-2 w-full sm:max-w-[300px] text-sm sm:text-base">
                    PIDE PRESUPUESTO
                </button>
            </div>
        </form>
    </div>
</section>