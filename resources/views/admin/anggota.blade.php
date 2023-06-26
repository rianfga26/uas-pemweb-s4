<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Anggota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table id="TableAnggota">
                    <thead>
                        <tr class="uppercase">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Rian </td>
                            <td>3130021008</td>
                            <td>S1 Sistem Informasi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>

    let table = new DataTable('#TableAnggota', {
        responsive: true
    });
</script>