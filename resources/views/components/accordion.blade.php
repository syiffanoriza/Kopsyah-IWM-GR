<div id="accordion-color" class="space-y-2" data-accordion="collapse"
    data-active-classes="border-b-0 rounded-b-none hover-none">
    <div class="shadow-md bg-transparent rounded-xl group">
        <h2 id="accordion-color-heading">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right rounded-b-0 text-gray-900 border border-gray-900 rounded-xl gap-5 group-hover:border-primary-900 group-hover:text-primary-900 transition duration-200"
                data-accordion-target="#accordion-color-body" aria-expanded="false"
                aria-controls="accordion-color-body">
                <span>{{ $attributes['header'] }}</span>
                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body" class="hidden" aria-labelledby="accordion-color-heading">
            <div class="p-5 pt-0 cursor-default border border-t-0 border-gray-900 text-gray-800 rounded-b-xl group-hover:border-primary-900 group-hover:text-primary-900 transition duration-200">
                <p class="mb-2">{{ $slot }}</p>
            </div>
        </div>
    </div>
</div>
