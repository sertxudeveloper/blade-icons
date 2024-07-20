<?php

it('compiles a single anonymous component', function () {
    $result = svg('icon-bell')->toHtml();

    // Note: the empty class here seems to be a Blade components bug.
    $expected = <<<'SVG'
<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M20.2002 16.152C19.4602 15.341 18.0755 14.1211 18.0755 10.125C18.0755 7.08984 15.9887 4.66016 13.1749 4.06406V3.25C13.1749 2.55977 12.6264 2 11.95 2C11.2736 2 10.7251 2.55977 10.7251 3.25V4.06406C7.91129 4.66016 5.82451 7.08984 5.82451 10.125C5.82451 14.1211 4.43984 15.341 3.69982 16.152C3.47 16.4039 3.36811 16.7051 3.37003 17C3.37424 17.6406 3.86721 18.25 4.59957 18.25H19.3004C20.0328 18.25 20.5261 17.6406 20.53 17C20.5319 16.7051 20.43 16.4035 20.2002 16.152ZM5.95666 16.375C6.76946 15.2824 7.6581 13.4715 7.66231 10.1477C7.66231 10.1398 7.66002 10.1328 7.66002 10.125C7.66002 7.70859 9.58055 5.75 11.95 5.75C14.3195 5.75 16.24 7.70859 16.24 10.125C16.24 10.1328 16.2377 10.1398 16.2377 10.1477C16.2419 13.4719 17.1305 15.2828 17.9433 16.375H5.95666ZM11.95 22C13.3029 22 14.4003 20.8809 14.4003 19.5H9.49973C9.49973 20.8809 10.5971 22 11.95 22Z"/>
</svg>
SVG;

    $this->assertSame($expected, $result);
});

it('can add classes to icons', function () {
    $result = svg('icon-bell', 'w-6 h-6 text-gray-500')->toHtml();

    $expected = <<<'SVG'
<svg class="w-6 h-6 text-gray-500" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M20.2002 16.152C19.4602 15.341 18.0755 14.1211 18.0755 10.125C18.0755 7.08984 15.9887 4.66016 13.1749 4.06406V3.25C13.1749 2.55977 12.6264 2 11.95 2C11.2736 2 10.7251 2.55977 10.7251 3.25V4.06406C7.91129 4.66016 5.82451 7.08984 5.82451 10.125C5.82451 14.1211 4.43984 15.341 3.69982 16.152C3.47 16.4039 3.36811 16.7051 3.37003 17C3.37424 17.6406 3.86721 18.25 4.59957 18.25H19.3004C20.0328 18.25 20.5261 17.6406 20.53 17C20.5319 16.7051 20.43 16.4035 20.2002 16.152ZM5.95666 16.375C6.76946 15.2824 7.6581 13.4715 7.66231 10.1477C7.66231 10.1398 7.66002 10.1328 7.66002 10.125C7.66002 7.70859 9.58055 5.75 11.95 5.75C14.3195 5.75 16.24 7.70859 16.24 10.125C16.24 10.1328 16.2377 10.1398 16.2377 10.1477C16.2419 13.4719 17.1305 15.2828 17.9433 16.375H5.95666ZM11.95 22C13.3029 22 14.4003 20.8809 14.4003 19.5H9.49973C9.49973 20.8809 10.5971 22 11.95 22Z"/>
</svg>
SVG;

    $this->assertSame($expected, $result);
});

it('can add styles to icons', function () {
    $result = svg('icon-bell', ['style' => 'color: #555'])->toHtml();

    $expected = <<<'SVG'
<svg style="color: #555" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M20.2002 16.152C19.4602 15.341 18.0755 14.1211 18.0755 10.125C18.0755 7.08984 15.9887 4.66016 13.1749 4.06406V3.25C13.1749 2.55977 12.6264 2 11.95 2C11.2736 2 10.7251 2.55977 10.7251 3.25V4.06406C7.91129 4.66016 5.82451 7.08984 5.82451 10.125C5.82451 14.1211 4.43984 15.341 3.69982 16.152C3.47 16.4039 3.36811 16.7051 3.37003 17C3.37424 17.6406 3.86721 18.25 4.59957 18.25H19.3004C20.0328 18.25 20.5261 17.6406 20.53 17C20.5319 16.7051 20.43 16.4035 20.2002 16.152ZM5.95666 16.375C6.76946 15.2824 7.6581 13.4715 7.66231 10.1477C7.66231 10.1398 7.66002 10.1328 7.66002 10.125C7.66002 7.70859 9.58055 5.75 11.95 5.75C14.3195 5.75 16.24 7.70859 16.24 10.125C16.24 10.1328 16.2377 10.1398 16.2377 10.1477C16.2419 13.4719 17.1305 15.2828 17.9433 16.375H5.95666ZM11.95 22C13.3029 22 14.4003 20.8809 14.4003 19.5H9.49973C9.49973 20.8809 10.5971 22 11.95 22Z"/>
</svg>
SVG;

    $this->assertSame($expected, $result);
});
