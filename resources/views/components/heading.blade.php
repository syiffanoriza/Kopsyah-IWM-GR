<div class="text-center mb-10">
    <div class="text-4xl font-semibold mb-2">
        <h2>
            <span class="text-primary-800">
                @if (isset($span))
                {{ $span }}
                @endif
            </span>

            @if (isset($head))
            {{ $head }}
            @endif
        </h2>
    </div>
    <div class="text-lg leading-relaxed">
        <p>
            @if (isset($par))
            {{ $par }}
            @endif
        </p>
    </div>
</div>