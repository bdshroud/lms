<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Quiz show') }}
            </h2>

            <a class="lms-btn" href="{{ route('quiz.index') }}">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <!-- component -->
               <livewire:quiz-show :quiz="$quiz" />
            </div>
        </div>
    </div>
</x-app-layout>
