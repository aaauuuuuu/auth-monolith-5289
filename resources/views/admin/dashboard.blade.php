<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4" style="font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Statistik Pengguna</h3>

                    <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 1rem;">
                        <!-- Kotak Biru: Total Pengguna -->
                        <div style="background-color: #dbeafe; padding: 1rem; border-radius: 0.5rem;">
                            <p style="font-size: 0.875rem; color: #1e40af; margin-bottom: 0.25rem;">Total Pengguna</p>
                            <p style="font-size: 1.875rem; font-weight: bold; color: #1e3a8a;">{{ $totalUsers }}</p>
                        </div>

                        <!-- Kotak Hijau: Admin -->
                        <div style="background-color: #dcfce7; padding: 1rem; border-radius: 0.5rem;">
                            <p style="font-size: 0.875rem; color: #166534; margin-bottom: 0.25rem;">Admin</p>
                            <p style="font-size: 1.875rem; font-weight: bold; color: #14532d;">{{ $totalAdmins }}</p>
                        </div>

                        <!-- Kotak Kuning: User Biasa -->
                        <div style="background-color: #fef9c3; padding: 1rem; border-radius: 0.5rem;">
                            <p style="font-size: 0.875rem; color: #854d0e; margin-bottom: 0.25rem;">User Biasa</p>
                            <p style="font-size: 1.875rem; font-weight: bold; color: #713f12;">{{ $totalRegularUsers }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>