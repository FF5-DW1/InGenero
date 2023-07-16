
<div class="flex justify-center p-4 items-center bg-green-200">
<footer class="bg-green-200 text-zinc py-10 flex-col justify-center items-center">
    <div class="max-w-screen-xl">
        <div class="w-full md:w-1/4 mb-6">
            <img src="img\logoencabezado.png" alt="Logo" class="logo w-36 h-auto">
        </div>
        <div class="container mx-auto flex flex-wrap justify-between">
            <div class="w-full md:w-1/4 mb-6">
                <h4 class="text-lg font-bold">¡Contáctanos!</h4>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus felis nec justo pretium, et auctor metus posuere.</p>
            </div>
            <div class="w-full md:w-1/2 mb-6">
                <form class="flex-col" method="POST" action="{{ route('enviar-correo') }}" >
                @csrf
                    <div class="w-full md:w-1/2 mb-4">
                        <label for="name" class="block mb-1">Nombre</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="w-full md:w-1/2 mb-4">
                        <label for="email" class="block mb-1">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="w-full mb-4">
                        <label for="message" class="block mb-1">Mensaje</label>
                        <textarea id="message" name="message" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <div class="w-full">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
</div>
