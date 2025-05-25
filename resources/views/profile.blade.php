<x-default-layout title="Profile" section_title="Profile">
    <div class="flex flex-col lg:1/2 gap-4 px-4 py-4 bg-white border border-zinc-100 shadow col-span-3 md:col-span-2">
        <div class="flex flex-col gap-2">
            <div class="font-semibold border-b border-zinc-300">{{ $user->name }}</div>
        </div>
        <div class="flex flex-col gap-2">
            <div class="font-semibold">Email</div>
            <div class="py-1 border border-zinc-300">{{ $user->email }}</div>
        </div>
        <div class="flex flex-col gap-2">
            <div class="font-semibold">Role</div>
            <div class="py-1 border border-zinc-300">{{ $user->role }}</div>
        </div>
        <form action="{{ route('auth.logout') }}" method="POST" class="self-end mt-4">
            @method('DELETE')
            @csrf
            <button class="bg-red-50 border border-red-500 text-red-500 px-3 py-1 text-sm cursor-pointer">Logout</button>
        </form>
    </div>
</x-default-layout>