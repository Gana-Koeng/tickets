@extends('layouts.dash')

@section('content')

    <body>

        <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/seats" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/products">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">CreateMovie</span>
				</a>
			</li>
			<li class="active">
				<a href="/users">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">users</span>
				</a>
			</li>
			<li>
				<a href="/index">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">index</span>
				</a>
			</li>
		</ul>

	</section>
	<!-- CONTENT -->
	<section>

	</section>
    </body>

    </html>
@endsection
