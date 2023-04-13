<header class="fixed top-0 w-full z-30 bg-white transition-all pt-4">
	<nav class="max-w-screen-xl px-6 sm:px-8 lg:px-16 mx-auto grid grid-flow-col py-3 sm:py-4">
		<div class="col-start-1 col-end-2 flex items-center">
			<a href="{{ route('home.index') }}">
				<img class="h-8 w-auto" src="{{ asset('assets/icons/logo.svg') }}" alt="">
			</a>
		</div>
		<ul class="hidden lg:flex col-start-4 col-end-8 text-black-500  items-center">
			<a class="px-4 py-2 mx-2 cursor-pointer animation-hover inline-block relative text-black-500 hover:text-orange-500">About</a>
			<a class="px-4 py-2 mx-2 cursor-pointer animation-hover inline-block relative text-black-500 hover:text-orange-500">Feature</a>
			<a class="px-4 py-2 mx-2 cursor-pointer animation-hover inline-block relative text-black-500 hover:text-orange-500">Pricing</a>
			<a class="px-4 py-2 mx-2 cursor-pointer animation-hover inline-block relative text-black-500 hover:text-orange-500">Testimonial</a>
		</ul>
		<div class="col-start-10 col-end-12 font-medium flex justify-end items-center">
			@if(!auth()->user())
				<a class="text-black-600 mx-2 sm:mx-4 capitalize tracking-wide hover:text-orange-500 transition-all" href="{{ route('login') }}">Sign In</a>
				<a class="font-medium tracking-wide py-2 px-5 sm:px-8 border border-orange-500 text-orange-500 bg-white-500 outline-none rounded-l-full rounded-r-full capitalize hover:bg-orange-500 hover:text-white-500 transition-all hover:shadow-orange" href="{{ route('register') }}">Sign Up</a>
			@endif
		</div>
	</nav>
</header>