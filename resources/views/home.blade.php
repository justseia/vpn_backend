@extends('layouts.app')

@section('content')
	<div class="max-w-screen-xl mt-24 px-8 xl:px-16 mx-auto" id="about">
		<div>
			<div class="grid grid-flow-row sm:grid-flow-col grid-rows-2 md:grid-rows-1 sm:grid-cols-2 gap-8 py-6 sm:py-16">
				<div class=" flex flex-col justify-center items-start row-start-2 sm:row-start-1">
					<h1 class="text-3xl lg:text-4xl xl:text-5xl font-medium text-black-600 leading-normal">Want anything to be easy with <strong>VPN</strong>.</h1>
					<p class="text-black-500 mt-4 mb-6">Provide a network for all your needs with ease and fun using VPN discover interesting features from us.</p>
					<button class="py-3 lg:py-4 px-12 lg:px-16 text-white-500 font-semibold rounded-lg bg-orange-500 hover:shadow-orange-md transition-all outline-none undefined">Get Started</button>
				</div>
				<div class="flex w-full">
					<div class="h-full w-full">
						<img src="{{ asset('assets/img/hero_1.webp') }}" alt=""/>
					</div>
				</div>
			</div>
		</div>
		<div class="relative w-full flex">
			<div class="rounded-lg w-full grid grid-flow-row sm:grid-flow-row grid-cols-1 sm:grid-cols-3 py-9 divide-y-2 sm:divide-y-0 sm:divide-x-2 divide-gray-100 bg-white-500 z-10">
				<div class="flex items-center justify-start sm:justify-center py-4 sm:py-6 w-8/12 px-4 sm:w-auto mx-auto sm:mx-0">
					<div class="flex mx-auto w-40 sm:w-auto">
						<div class="flex items-center justify-center bg-orange-100 w-12 h-12 mr-6 rounded-full">
							<img src="{{ asset('assets/icons/user.svg') }}" class="h-6 w-6" alt=""/>
						</div>
						<div class="flex flex-col"><p class="text-xl text-black-600 font-bold">390 +</p>
							<p class="text-lg text-black-500">Users</p>
						</div>
					</div>
				</div>
				<div class="flex items-center justify-start sm:justify-center py-4 sm:py-6 w-8/12 px-4 sm:w-auto mx-auto sm:mx-0">
					<div class="flex mx-auto w-40 sm:w-auto">
						<div class="flex items-center justify-center bg-orange-100 w-12 h-12 mr-6 rounded-full">
							<img src="{{ asset('assets/icons/location.svg') }}" class="h-6 w-6" alt=""/>
						</div>
						<div class="flex flex-col"><p class="text-xl text-black-600 font-bold">20 +</p>
							<p class="text-lg text-black-500">Locations</p>
						</div>
					</div>
				</div>
				<div class="flex items-center justify-start sm:justify-center py-4 sm:py-6 w-8/12 px-4 sm:w-auto mx-auto sm:mx-0">
					<div class="flex mx-auto w-40 sm:w-auto">
						<div class="flex items-center justify-center bg-orange-100 w-12 h-12 mr-6 rounded-full">
							<img src="{{ asset('assets/icons/server.svg') }}" class="h-6 w-6" alt=""/>
						</div>
						<div class="flex flex-col"><p class="text-xl text-black-600 font-bold">50 +</p>
							<p class="text-lg text-black-500">Server</p>
						</div>
					</div>
				</div>
			</div>
			<div class="absolute bg-black-600 opacity-5 w-11/12 roudned-lg h-64 sm:h-48 top-0 mt-8 mx-auto left-0 right-0"></div>
		</div>
	</div>


	<div class="max-w-screen-xl mt-8 mb-6 sm:mt-14 sm:mb-14 px-6 sm:px-8 lg:px-16 mx-auto">
		<div class="grid grid-flow-row sm:grid-flow-col grid-cols-1 sm:grid-cols-2 gap-8 p  y-8 my-12">
			<div class="flex w-full justify-end">
				<div class="h-full w-full p-4">
					<img src="{{ asset('assets/img/hero_2.webp') }}" alt=""/>
				</div>
			</div>
			<div>
				<div class="flex flex-col items-end justify-center ml-auto w-full lg:w-9/12"><h3 class="text-3xl lg:text-4xl font-medium leading-relaxed text-black-600">We Provide Many Features You Can Use</h3>
					<p class="my-2 text-black-500">You can explore the features that we provide with fun and have their own functions each feature.</p>
					<ul class="text-black-500 self-start list-inside">
						<li class="relative circle-check custom-list">
							<img class="inline-block" src="{{ asset('assets/icons/checklist.svg') }}" alt=""/> Powerfull online protection.
						</li>
						<li class="relative circle-check custom-list">
							<img class="inline-block" src="{{ asset('assets/icons/checklist.svg') }}" alt=""/> Internet without borders.
						</li>
						<li class="relative circle-check custom-list">
							<img class="inline-block" src="{{ asset('assets/icons/checklist.svg') }}" alt=""/> Supercharged VPN
						</li>
						<li class="relative circle-check custom-list">
							<img class="inline-block" src="{{ asset('assets/icons/checklist.svg') }}" alt=""/> No specific time limits.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="bg-gradient-to-b from-white-300 to-white-500 w-full py-14" id="pricing">
		<div class="max-w-screen-xl  px-6 sm:px-8 lg:px-16 mx-auto flex flex-col w-full text-center justify-center">
			<div class="flex flex-col w-full">
				<div><h3 class="text-2xl sm:text-3xl lg:text-4xl font-medium text-black-600 leading-relaxed">Choose Your Plan</h3>
					<p class="leading-normal w-10/12 sm:w-7/12 lg:w-6/12 mx-auto my-2 text-center">Let's choose the package that is best for you and explore it happily and cheerfully.</p></div>
				<div class="grid grid-flow-row sm:grid-flow-col grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-12 py-8 lg:py-12 px-6 sm:px-0 lg:px-6">
					<div class="flex justify-center">
						<div class="flex flex-col justify-center items-center border-2 border-gray-500 rounded-xl py-4 px-6 lg:px-12 xl:px-20">
							<div class="p-4 lg:p-0 mt-6 lg:mt-16">
								<img src="{{ asset('assets/img/plan_1.webp') }}" alt=""/>
							</div>
							<p class="text-lg text-black-600 font-medium capitalize my-2 sm:my-7">Free Plan</p>
							<ul class="flex flex-col list-inside pl-6 xl:pl-0 items-start justify-start text-left text-black-500 flex-grow">
								<li class="relative check custom-list my-2">Unlimited Bandwitch</li>
								<li class="relative check custom-list my-2">Encrypted Connection</li>
								<li class="relative check custom-list my-2">No Traffic Logs</li>
								<li class="relative check custom-list my-2">Works on All Devices</li>
							</ul>
							<div class="flex flex-col w-full justify-center mb-8 flex-none mt-12">
								<p class="text-2xl text-black-600 text-center mb-4">Free</p>
								<button class="font-medium tracking-wide py-2 px-5 sm:px-8 border border-orange-500 text-orange-500 bg-white-500 outline-none rounded-l-full rounded-r-full capitalize hover:bg-orange-500 hover:text-white-500 transition-all hover:shadow-orange">Select</button>
							</div>
						</div>
					</div>
					<div class="flex justify-center">
						<div class="flex flex-col justify-center items-center border-2 border-gray-500 rounded-xl py-4 px-6 lg:px-12 xl:px-20">
							<div class="p-4 lg:p-0 mt-6 lg:mt-16">
								<img src="{{ asset('assets/img/plan_2.webp') }}" alt=""/>
							</div>
							<p class="text-lg text-black-600 font-medium capitalize my-2 sm:my-7">Standard Plan </p>
							<ul class="flex flex-col list-inside pl-6 xl:pl-0 items-start justify-start text-left text-black-500 flex-grow">
								<li class="relative check custom-list my-2">Unlimited Bandwitch</li>
								<li class="relative check custom-list my-2">Encrypted Connection</li>
								<li class="relative check custom-list my-2">No Traffic Logs</li>
								<li class="relative check custom-list my-2">Works on All Devices</li>
								<li class="relative check custom-list my-2">Connect Anyware</li>
							</ul>
							<div class="flex flex-col w-full justify-center mb-8 flex-none mt-12">
								<p class="text-2xl text-black-600 text-center mb-4">$9 <span class="text-black-500">/ mo</span></p>
								<button class="font-medium tracking-wide py-2 px-5 sm:px-8 border border-orange-500 text-orange-500 bg-white-500 outline-none rounded-l-full rounded-r-full capitalize hover:bg-orange-500 hover:text-white-500 transition-all hover:shadow-orange">Select</button>
							</div>
						</div>
					</div>
					<div class="flex justify-center">
						<div class="flex flex-col justify-center items-center border-2 border-gray-500 rounded-xl py-4 px-6 lg:px-12 xl:px-20">
							<div class="p-4 lg:p-0 mt-6 lg:mt-16">
								<img src="{{ asset('assets/img/plan_3.webp') }}" alt=""/>
							</div>
							<p class="text-lg text-black-600 font-medium capitalize my-2 sm:my-7">Premium Plan </p>
							<ul class="flex flex-col list-inside pl-6 xl:pl-0 items-start justify-start text-left text-black-500 flex-grow">
								<li class="relative check custom-list my-2">Unlimited Bandwitch</li>
								<li class="relative check custom-list my-2">Encrypted Connection</li>
								<li class="relative check custom-list my-2">No Traffic Logs</li>
								<li class="relative check custom-list my-2">Works on All Devices</li>
								<li class="relative check custom-list my-2">Connect Anyware</li>
								<li class="relative check custom-list my-2">Get New Features</li>
							</ul>
							<div class="flex flex-col w-full justify-center mb-8 flex-none mt-12">
								<p class="text-2xl text-black-600 text-center mb-4">$12 <span class="text-black-500">/ mo</span></p>
								<button class="font-medium tracking-wide py-2 px-5 sm:px-8 border border-orange-500 text-orange-500 bg-white-500 outline-none rounded-l-full rounded-r-full capitalize hover:bg-orange-500 hover:text-white-500 transition-all hover:shadow-orange">Select</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex-col w-full my-16">
				<div><h3 class="text-2xl sm:text-3xl lg:text-4xl font-medium text-black-600 leading-relaxed w-9/12 sm:w-6/12 lg:w-4/12 mx-auto">Huge Global Network of Fast VPN </h3>
					<p class="leading-normal  mx-auto my-2 w-10/12 sm:w-7/12 lg:w-6/12">See VPN everywhere to make it easier for you when you move locations.</p></div>
				<div>
					<div class="py-12 w-full px-8 mt-16">
						<img src="{{ asset('assets/icons/map.svg') }}" alt="">
					</div>
				</div>
				<div>
					<div class="w-full flex justify-evenly items-center mt-4 flex-wrap lg:flex-nowrap">
						<img src="{{ asset('assets/img/amazon.png') }}" class="h-14 w-auto mt-4 lg:mt-2" alt="">
						<img src="{{ asset('assets/img/netflix.png') }}" class="h-14 w-auto mt-2 lg:mt-0" alt="">
						<img src="{{ asset('assets/img/reddit.png') }}" class="h-12 w-auto mt-2 lg:mt-0" alt="">
						<img src="{{ asset('assets/img/discord.png') }}" class="h-14 w-auto mt-2 lg:mt-0" alt="">
						<img src="{{ asset('assets/img/spotify.png') }}" class="h-12 w-auto mt-2 lg:mt-0" alt="">
					</div>
				</div>
			</div>
			<div class="flex flex-col w-full my-16" id="testimoni">
				<div><h3 class="text-2xl sm:text-3xl lg:text-4xl font-medium text-black-600 leading-normal w-9/12 sm: lg:w-4/12 mx-auto">Trusted by Thousands of Happy Customer </h3>
					<p class="leading-normal mx-auto mb-2 mt-4 w-10/12 sm:w-7/12 lg:w-6/12">These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p></div>
				<div class="w-full flex flex-col py-12">
					<div>
						<div class="slick-slider flex items-stretch justify-items-stretch slick-initialized" dir="ltr">
							<div class="slick-list">
								<div class="slick-track">
									<div class="slick-slide slick-cloned">
										<div>
											<div class="px-3 flex items-stretch" tabindex="-1">
												<div class="border-2 border-gray-500 hover:border-orange-500 transition-all rounded-lg p-8 flex flex-col">
													<div class="flex flex-col xl:flex-row w-full items-stretch xl:items-center">
														<div class="flex order-2 xl:order-1">
															<img src="{{ asset('assets/img/people.webp') }}" alt=""/>
															<div class="flex flex-col ml-5 text-left"><p class="text-lg text-black-600 capitalize">iezh Robert</p>
																<p class="text-sm text-black-500 capitalize">Warsaw , Poland</p>
															</div>
														</div>
														<div class="flex flex-none items-center ml-auto order-1 xl:order-2">
															<p class="text-sm">4.5</p>
															<span class="flex ml-4">
																<svg class="h-4 w-4" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.19 6.418l-3.968-.577-1.774-3.595a.502.502 0 0 0-.897 0L5.779 5.841l-3.967.577a.5.5 0 0 0-.277.853l2.87 2.799-.677 3.951a.5.5 0 0 0 .725.527L8 12.682l3.548 1.866a.5.5 0 0 0 .725-.527l-.678-3.951 2.87-2.799a.499.499 0 0 0-.276-.853z" fill="#FEA250"></path></svg>
															</span>
														</div>
													</div>
													<p class="mt-5 text-left">“ Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. VPN always the best ”.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<ul class="slick-dots w-max absolute mt-20 ">
								<li class="slick-active">
									<a class="">
										<span class="mx-2 rounded-l-full rounded-r-full h-4 w-4 block cursor-pointer transition-all"></span>
									</a>
								</li>
								<li class="">
									<a class="">
										<span class="mx-2 rounded-l-full rounded-r-full h-4 w-4 block cursor-pointer transition-all"></span>
									</a>
								</li>
							</ul>
						</div>
						<div class="flex w-full items-center justify-end">
							<div class="flex flex-none justify-between w-auto mt-14">
								<div class="mx-4 flex items-center justify-center h-14 w-14 rounded-full bg-white border-orange-500 border hover:bg-orange-500 hover:text-white-500 transition-all text-orange-500 cursor-pointer">
									<svg class="h-6 w-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
									</svg>
								</div>
								<div class="flex items-center justify-center h-14 w-14 rounded-full bg-white border-orange-500 border hover:bg-orange-500 hover:text-white-500 transition-all text-orange-500 cursor-pointer">
									<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="relative w-full mt-16">
					<div>
						<div class="absolute rounded-xl  py-8 sm:py-14 px-6 sm:px-12 lg:px-16 w-full flex flex-col sm:flex-row justify-between items-center z-10 bg-white-500">
							<div class="flex flex-col text-left w-10/12 sm:w-7/12 lg:w-5/12 mb-6 sm:mb-0"><h5 class="text-black-600 text-xl sm:text-2xl lg:text-3xl leading-relaxed font-medium">Subscribe Now for <br> Get Special Features!</h5>
								<p>Let's subscribe with us and find the fun.</p></div>
							<button class="py-3 lg:py-4 px-12 lg:px-16 text-white-500 font-semibold rounded-lg bg-orange-500 hover:shadow-orange-md transition-all outline-none undefined">Get Started</button>
						</div>
						<div class="absolute bg-black-600 opacity-5 w-11/12 roudned-lg h-60 sm:h-56 top-0 mt-8 mx-auto left-0 right-0"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
