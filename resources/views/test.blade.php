<h1>TEST PAGE</h1>

@foreach($users as $user)
		 
		
		        <h5 class="card-title">{{$user->id}}</h5>
				<h5 class="card-title">{{$user->name}}</h5>
				<h7 class="card-subtitle mb-2 text-muted">{{$user->email}}</h7>
				<h7 class="card-subtitle mb-2 text-muted">{{$user->password}}</h7> 
			

@endforeach