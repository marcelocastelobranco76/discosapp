<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('discos.index') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Voltar
                </a>
                <form action="{{ route('discos.update', $disco->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="textartista"
                            class="block mb-2 text-sm font-bold text-gray-700">Artista</label>
                        <input type="text"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            name="artista"
                            value="{{ $disco->artista }}"
                            placeholder="Digite o nome do artista">
                        @error('artista') <span class="text-red-500">{{ $message }}
                        </span>@enderror
                    </div>

                <div class="mb-4">
                    <label for="texttitulo"
                        class="block mb-2 text-sm font-bold text-gray-700">Título</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="titulo"
                        value="{{ $disco->titulo }}"
                        placeholder="Digite o título do disco" >
                    @error('titulo') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>




                <div class="mb-4">
                    <label for="textano"
                        class="block mb-2 text-sm font-bold text-gray-700">Ano de lançamento</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="ano"
                        value="{{ $disco->ano }}"
                        placeholder="Digite o ano de lançamento do disco">
                    @error('ano') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>



                <div class="mb-4">
                    <label for="textanoedicao"
                        class="block mb-2 text-sm font-bold text-gray-700">Ano de lançamento da sua edição</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="ano_edicao"
                        value="{{ $disco->ano_edicao }}"
                        placeholder="Digite o ano de lançamento da edição do seu disco">
                    @error('ano_edicao') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>


                <div class="mb-4">
                    <label for="textano"
                        class="block mb-2 text-sm font-bold text-gray-700">Selo</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="selo"
                        value="{{ $disco->selo }}"
                        placeholder="Digite o selo do seu disco">
                    @error('selo') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>


                <div class="mb-4">
                    <label for="textpais"
                        class="block mb-2 text-sm font-bold text-gray-700">País onde foi lançada a cópia do seu disco</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="pais"
                        value="{{ $disco->pais }}"
                        placeholder="Digite o país onde foi lançada sua cópia">
                    @error('pais') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>

                <div class="mb-4">
                    <label for="textformato"
                    class="block mb-2 text-sm font-bold text-gray-700">Formato (CD, LP, K7, DVD, etc.)</label>
                    <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    name="formato">{{ $disco->formato }}</textarea>
                    @error('formato') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>

                <div class="mb-4">
                    <label for="texttipo"
                    class="block mb-2 text-sm font-bold text-gray-700">Tipo (álbum, coletânea, ao vivo, etc)</label>
                    <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    name="tipo">{{ $disco->tipo }}</textarea>
                    @error('tipo') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>

                <div class="mb-4">
                    <label for="textespecificacao"
                    class="block mb-2 text-sm font-bold text-gray-700">Especificações da edição</label>
                    <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    name="especificacoes">{{ $disco->especificacoes }}</textarea>
                    @error('especificacoes') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>




                <div>
                    <button type="submit"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Salvar
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
