<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('+ Informações') }}
        </h2>
    </x-slot>
    <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('discos.index') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Voltar
                </a>
                <table class="w-full table-fixed">
                    <tbody>

                @foreach($usuario as $row)

                

                      <tr>
                          <td class="px-4 py-2 font-bold">Cadastrado por</td>
                          <td>{{ $row->name }}</td>
                      </tr>
                @endforeach


                        <tr>
                            <td class="px-4 py-2 font-bold">Título</td>
                            <td>{{ $disco->titulo }}</td>
                        </tr>



                        <tr>
                            <td class="px-4 py-2 font-bold">Artista</td>
                            <td>{{ $disco->artista }}</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-bold">Ano de lançamento</td>
                            <td>{{ $disco->ano }}</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-bold">Ano de lançamento da sua edição</td>
                            <td>{{ $disco->ano_edicao }}</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-bold">Selo</td>
                            <td>{{ $disco->selo }}</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-bold">País onde foi lançada a cópia do seu disco</td>
                            <td>{{ $disco->pais }}</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-bold">Formato (CD, LP, K7, DVD, etc.)</td>
                            <td>{{ $disco->formato }}</td>
                        </tr>


                        <tr>
                            <td class="px-4 py-2 font-bold">Tipo (álbum, coletânea, ao vivo, etc)</td>
                            <td>{{ $disco->tipo }}</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-bold">Especificações da edição</td>
                            <td>{{ $disco->especificacoes }}</td>
                        </tr>


                        <tr>
                            <td class="px-4 py-2 font-bold">Cadastrado em</td>
                            <td>{{ date_format($disco->created_at, 'd/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">Última atualização</td>
                            <td>{{ date_format($disco->updated_at, 'd/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
