@extends('layouts.app')

@section('content')
	<link href="{{asset('assets/css/tailwind.css')}}" rel="stylesheet"/>
	<section class="py-52 flex items-center relative overflow-hidden">
		<div class="container z-3">
			<div class="flex justify-center">
				<div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
					<h5 class="my-6 text-xl font-semibold">Signup</h5>
					<form action="{{ route('register') }}" method="post" class="ltr:text-left rtl:text-right">
						@csrf
						<div class="grid grid-cols-1">
							<div class="mb-4">
								<label class="font-semibold" for="RegisterName">Full Name:</label>
								<input name="full_name" id="RegisterName" type="text" class="form-input mt-3" placeholder="Harry Potter">
							</div>
							<div class="mb-4">
								<label class="font-semibold" for="LoginEmail">Email Address:</label>
								<input name="email" id="LoginEmail" type="email" class="form-input mt-3" placeholder="reception@iitu.edu.kz">
							</div>
							<div class="mb-4">
								<label class="font-semibold" for="LoginPassword">Password:</label>
								<input name="password" id="LoginPassword" type="password" class="form-input mt-3" placeholder="password">
							</div>
							<div class="mb-4">
								<button type="submit" class="btn bg-orange-600 hover:bg-orange-700 text-white rounded-md w-full">Register</button>
							</div>
							<div class="text-center">
								<span class="text-slate-400 ltr:mr-2 rtl:ml-2">Already have an account ? </span> <a href="{{ route('login') }}" class="text-black dark:text-white font-bold">Sign in</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
