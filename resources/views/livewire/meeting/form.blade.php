<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <div class="text-center mb-6">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="mx-auto h-16 w-auto">
            <h1 class="text-2xl font-bold text-gray-800 mt-4">Outdoor Meeting Survey</h1>
        </div>
        <form wire:submit.prevent="store">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" wire:model.blur="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" placeholder="Enter your name">
                @error('name') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" wire:model.blur="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" placeholder="Enter your email">
                @error('email') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone</label>
                <input type="tel" wire:model.blur="phone" id="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('phone') border-red-500 @enderror" placeholder="Enter your phone number">
                @error('phone') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="telegram" class="block text-gray-700 font-medium mb-2">Telegram Username</label>
                <input type="text" wire:model.blur="telegram" id="telegram" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('telegram') border-red-500 @enderror" placeholder="Enter your Telegram username">
                @error('telegram') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-medium mb-2">Role</label>
                <select wire:model.blur="role" id="role" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('role') border-red-500 @enderror">
                    <option value="Developer">Developer</option>
                    <option value="Devops">Devops</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Translator">Translator</option>
                    <option value="Researcher">Researcher</option>
                </select>
                @error('role') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
                <div wire:loading wire:target="store" class="mt-2">
                    <svg class="animate-spin h-5 w-5 text-blue-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                    </svg>
                </div>
            </div>
        </form>
    </div>
</div>
