@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	
	<!--start body-->

	<div class="container container--contact ">
		<div class="row justify-content-center" >
			<div class="col-md-12 container__info"> 
				<button  onclick="location.href='{{ url('back') }}'" title="Volver al menú principal" data-toggle="tooltip" 
				type="button" class="btn btn-danger button__back"><i class="fas fa-arrow-alt-circle-left"></i></button>

				<form action="" class="form__contact">
					
					<div class="div__item--contact">
						<h1 class="h1--contact">Tu opinión es importante para nosotros</h1>
					</div>

					<div class="div__item--contact">
						<label class="label--contact" for="name">Nombre Completo:</label>
						<input type="text" name="name" value="" />
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="email">Correo electrónico:</label>
						<input type="text" name="email" value="" />
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="phone">Número de teléfono:</label>
						<input type="text" name="phone" value="" />
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="Suggert">Inconveniente:</label>
						<select id="Suggert">
							<option value="Ayuda">Ayuda</option>
							<option value="Consulta">Consulta</option>
							<option value="Sugerencia">Sugerencia</option>
							<option value="Queja">Queja</option>
						</select>
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="comment">Comentario:</label>
						<textarea class="textarea" name="comment" id="comment" cols="30" rows="10"></textarea>
					</div>

					<button type="submit" class="button--contact"><i class="fas fa-paper-plane"></i>   Enviar</button>
				</form>
			</div>
		</div>
	</div>	
	
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection