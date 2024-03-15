<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="width: 50%;height:480px;resize:both;overflow:auto;border:solid 1px #eee;">
                        <iframe
                            @if ($file_id == null) srcdoc="<div style='width: 100%;text-align: center;'>ERROR 404: FILE TIDAK DITEMUKAN</div>" 
                            @else src="https://drive.google.com/file/d/{{ $file_id }}/preview" @endif
                            allow="autoplay" style="width:100%;height:100%;"></iframe>

                        {{--  --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
