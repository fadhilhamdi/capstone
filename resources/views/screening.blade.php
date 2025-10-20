<x-app-layout>
    <!-- Header -->
    <header class="sticky top-0 bg-white shadow-sm border-b border-gray-200 z-10">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Screening</h2>
                </div>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-3 focus:outline-none">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-500">Orang Tua</p>
                        </div>
                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-[#44B3E0] shadow-sm">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=100&q=80"
                                 alt="Profile" class="w-full h-full object-cover">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="flex-1 p-6">
        <div class="max-w-4xl mx-auto">
            <div x-data="{
                currentStep: 0,
                totalSteps: @json($groupedQuestions->count())
            }">

                <!-- Progress bar -->
                <div class="mb-8">
                    <div class="flex justify-between mb-2">
                        <span class="text-sm font-medium text-gray-600">
                            Langkah <span x-text="currentStep + 1"></span> dari <span x-text="totalSteps"></span>
                        </span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-500"
                             :style="`width: ${((currentStep + 1) / totalSteps) * 100}%`">
                        </div>
                    </div>
                </div>

                <!-- Form Screening -->
                <form method="POST" action="{{ route('screening.store') }}">
                    @csrf

                    @foreach ($groupedQuestions as $category => $questions)
                        <div x-show="currentStep === {{ $loop->index }}" x-transition.opacity.duration.300ms>
                            <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-gray-200">
                                <h3 class="text-xl font-bold text-gray-900 mb-6 text-center">
                                    {{ ucwords(str_replace('_', ' ', $category)) }}
                                </h3>

                                <div class="space-y-5">
                                    @foreach ($questions as $question)
                                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                                            <p class="font-medium text-gray-800 mb-3">
                                                {{ $loop->parent->iteration }}.{{ $loop->iteration }}.
                                                {{ $question->question_text }}
                                            </p>

                                            <div class="flex items-center justify-center sm:justify-start space-x-2 sm:space-x-4 flex-wrap">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <label class="flex flex-col items-center space-y-1 cursor-pointer p-2 rounded-md hover:bg-blue-50">
                                                        <input type="radio"
                                                            name="answers[{{ $question->id }}]"
                                                            value="{{ $i }}"
                                                            class="form-radio h-5 w-5 text-blue-600 focus:ring-blue-500"
                                                            required>
                                                        <span class="text-sm font-medium text-gray-600">{{ $i }}</span>
                                                    </label>
                                                @endfor
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- Tombol Navigasi -->
                    <div class="mt-8 flex justify-between items-center">
                        <button
                            type="button"
                            @click="currentStep--"
                            :disabled="currentStep === 0"
                            class="px-6 py-2 bg-gray-200 text-gray-700 font-semibold rounded-lg shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                            Sebelumnya
                        </button>

                        <button
                            type="button"
                            @click="currentStep++"
                            x-show="currentStep < totalSteps - 1"
                            class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 transition-colors">
                            Selanjutnya
                        </button>

                        <button
                            type="submit"
                            x-show="currentStep === totalSteps - 1"
                            class="px-8 py-3 bg-green-600 text-white font-bold rounded-lg shadow-md hover:bg-green-700 transition-colors">
                            Selesai & Lihat Hasil
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
