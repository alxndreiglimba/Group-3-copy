<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SSG Supreme Admin Control Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Welcome back Commander, Vince! 👋</h3>
                    <p class="text-sm text-gray-600 mb-6">Here is your operational overview for the ssg-system.</p>
                    
                    <!-- Stats Grid Layout -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="p-4 bg-blue-50 border border-blue-200 rounded-lg shadow-sm">
                            <div class="text-blue-500 font-semibold uppercase text-xs">Total Registered Students</div>
                            <div class="text-2xl font-bold text-gray-800">1,240</div>
                        </div>
                        <div class="p-4 bg-green-50 border border-green-200 rounded-lg shadow-sm">
                            <div class="text-green-500 font-semibold uppercase text-xs">Active SSG Officers</div>
                            <div class="text-2xl font-bold text-gray-800">12</div>
                        </div>
                        <div class="p-4 bg-purple-50 border border-purple-200 rounded-lg shadow-sm">
                            <div class="text-purple-500 font-semibold uppercase text-xs">Pending Clearances</div>
                            <div class="text-2xl font-bold text-gray-800">45</div>
                        </div>
                    </div>

                    <!-- Master Student Directory Table Layout -->
                    <div class="mt-12 bg-white rounded-lg border border-gray-200 shadow-sm">
                        <div class="p-5 border-b border-gray-100 bg-gray-50 rounded-t-lg">
                            <h4 class="text-md font-bold text-gray-800">Master Student Directory</h4>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100 text-gray-700 text-xs font-semibold uppercase tracking-wider">
                                        <th class="p-4 border-b border-gray-200">Name</th>
                                        <th class="p-4 border-b border-gray-200">Email Address</th>
                                        <th class="p-4 border-b border-gray-200">System Role</th>
                                        <th class="p-4 border-b border-gray-200">Joined Date</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                                    @foreach($students as $student)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="p-4 font-medium text-gray-900">{{ $student->name }}</td>
                                        <td class="p-4 text-gray-600">{{ $student->email }}</td>
                                        <td class="p-4">
                                            <span class="px-2.5 py-1 text-xs font-semibold rounded-full {{ $student->role === 'admin' ? 'bg-red-100 text-red-700' : 'bg-blue-100 text-blue-700' }}">
                                                {{ ucfirst($student->role) }}
                                            </span>
                                        </td>
                                        <td class="p-4 text-gray-500">{{ $student->created_at->format('M d, Y') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
