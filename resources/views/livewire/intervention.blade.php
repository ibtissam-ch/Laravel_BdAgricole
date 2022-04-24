<div class="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interventions') }}
        </h2>
    </x-slot>
    <br>
    <div class="container mx-auto ">

        @if(Auth::user()->hasRole('admin'))
            @if($isOpen)
                @include('livewire.intervention.update')
            @else
                @include('livewire.intervention.create')
            @endif
        @else
            @if($isOpen)
                @include('livewire.intervention.update')
            @endif
        @endif

        <br>
        <table class="table table-bordered mt-5" id="BDTable">
                        <thead>
                        <tr class="bg-info bg-darken-md  text-light">
                            <th >Int debut</th>
                            <th >Int emp nss</th>
                            <th >Int par id</th>
                            <th >Int nb jrs</th>
                            @if(Auth::user()->hasRole('editor|admin'))
                                <th class="text-light">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach ($intervention as $value)
                            <tr >

                                <td >{{ $value->int_debut }}
                                </td>

                                <td >{{ $value->int_emp_nss }}
                                </td>

                                <td >{{ $value->int_par_id }}
                                </td>

                                <td >{{ $value->int_nb_jrs }}
                                </td>
                                @if(Auth::user()->hasRole('editor|admin'))
                                    <td >
                                        {{-- <dd>{{ $value->int_debut }}</dd> --}}
                                        <button wire:click="edit({{ json_encode($value->int_debut) }})" class="btn btn-secondary btn-sm">Edit
                                        </button>
                                        @if(Auth::user()->hasRole('admin'))
                                            <button  wire:click="delete({{ json_encode($value->int_debut) }})"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        @endif
                                    </td>
                                @endif

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#BDTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>
