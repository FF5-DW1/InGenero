<div class="md:flex md:justify-center md:gap-10 md:items-center ">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
    </div>
    <div class="md:w-4/12" style="background-color: rgba(133, 200, 178, 0.8); p-6 rounded-lg shadow-xl">
        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <!-- NOMBRE -->
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input id="name" name="name" type="text" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}" />
                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- APELLIDOS  -->
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Apellidos
                </label>
                <input id="name" name="name" type="text" placeholder="Apellidos" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}" />
                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- NACIONALIDAD -->
            <div class="mb-5">
                <label for="nationality" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nacionalidad
                </label>
                <input id="nationality" name="nationality" type="text" placeholder="Nacionalidad" class="border p-3 w-full rounded-lg @error('nationality') border-red-500 @enderror" value="{{ old('nationality') }}" />
                @error('nationality')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- FECHA DE NACIMIENTO -->
            <div class="mb-5">
                <label for="birthdate" class="mb-2 block uppercase text-gray-500 font-bold">
                    Fecha de Nacimiento
                </label>
                <input id="birthdate" name="birthdate" type="text" placeholder="Fecha de Nacimiento" class="border p-3 w-full rounded-lg @error('birthdate') border-red-500 @enderror" value="{{ old('birthdate') }}" />
                @error('birthdate')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- ALTURA -->
            <div class="mb-5">
                <label for="height" class="mb-2 block uppercase text-gray-500 font-bold">
                    Altura
                </label>
                <input id="height" name="height" type="text" placeholder="Altura" class="border p-3 w-full rounded-lg @error('height') border-red-500 @enderror" value="{{ old('height') }}" />
                @error('height')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- PESO -->
            <div class="mb-5">
                <label for="weight" class="mb-2 block uppercase text-gray-500 font-bold">
                    Peso
                </label>
                <input id="weight" name="weight" type="text" placeholder="Tu Peso" class="border p-3 w-full rounded-lg @error('weight') border-red-500 @enderror" value="{{ old('weight') }}" />

                @error('weight')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- COLOR DE OJOS -->
            <div class="mb-5">
                <label for="eyes" class="mb-2 block uppercase text-gray-500 font-bold">
                    Color de Ojos
                </label>
                <input id="eyes" name="eyes" type="text" placeholder="Color de tus Ojos" class="border p-3 w-full rounded-lg @error('eyes') border-red-500 @enderror" value="{{ old('eyes') }}" />
                @error('eyes')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- COLOR DE PELO -->
            <div class="mb-5">
                <label for="hair_color" class="mb-2 block uppercase text-gray-500 font-bold">
                    Color de Pelo
                </label>
                <input id="hair_color" name="hair_color" type="text" placeholder="Color de Pelo" class="border p-3 w-full rounded-lg @error('hair_color') border-red-500 @enderror" value="{{ old('hair_color') }}" />
                @error('hair_color')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <!-- INFO ADICIONAL -->
            <div class="mb-5">
                <label for="additional_info" class="mb-2 block uppercase text-gray-500 font-bold">
                    Info. Adicional
                </label>
                <textarea id="additional_info" name="additional_info" placeholder="info. Adicional" class="border p-3 w-full rounded-lg @error('additional_info') border-red-500 @enderror">{{ old('additional_info') }}</textarea>
                @error('additional_info')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            <!-- HABILIDADES ARTÍSTICAS -->
            <div class="mb-5">
                <label for="artistic_skills" class="mb-2 block uppercase text-gray-500 font-bold">
                    Habilidades Artísticas
                </label>
                <textarea id="artistic_skills" name="artistic_skills" placeholder="Habilidades artísticas" class="border p-3 w-full h-32 rounded-lg @error('artistic_skills') border-red-500 @enderror">{{ old('artistic_skills') }}</textarea>

                @error('artistic_skills')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <!-- <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input id="email" name="email" type="email" placeholder="Tu Email de Registro" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" />
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input id="password" name="password" type="password" placeholder="Password de Registro" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repetir Password
                </label>
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu Password" class="border p-3 w-full rounded-lg" />
            </div>

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" /> -->

        </form>
    </div>
</div>