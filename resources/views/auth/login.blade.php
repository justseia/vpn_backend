@extends('layouts.app')

@section('content')
	<link href="{{asset('assets/css/tailwind.css')}}" rel="stylesheet"/>
	<section class="py-52 flex items-center relative overflow-hidden">
		<div class="container z-3">
			<div class="flex justify-center">
				<div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
					<h5 class="my-6 text-xl font-semibold">Login</h5>
					<form action="{{ route('login') }}" method="post" class="ltr:text-left rtl:text-right">
						@csrf
						<div class="grid grid-cols-1">
							<div class="mb-4">
								<label class="font-medium" for="LoginEmail">Email Address:</label>
								<input name="email" id="LoginEmail" type="email" class="form-input mt-3" placeholder="reception@iitu.edu.kz">
							</div>
							<div class="mb-4">
								<label class="font-medium" for="LoginPassword">Password:</label>
								<input name="password" id="LoginPassword" type="password" class="form-input mt-3" placeholder="password">
							</div>
							<div class="mb-4">
								<button type="submit" class="btn bg-orange-600 hover:bg-orange-700 text-white rounded-md w-full">Login</button>
							</div>
							<div class="text-center">
								<span class="text-slate-400 ltr:mr-2 rtl:ml-2">Don't have an account ?</span> <a href="{{ route('register') }}" class="text-black dark:text-white font-bold">Sign Up</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
