@extends('layouts.master')

<!--Title-->
@section('title') HopeSoft | Greate Software With Low Cost @stop()

<!--navigation-->
@section('nav1') Home @stop()
@section('nav2') About @stop()
@section('nav3') Services @stop()
@section('nav4') Portfolio @stop()
@section('nav5') Clients @stop()
@section('nav6') Contact @stop()
@section('home_lead_text') Our software teams build amazing custom software applications for the web, desktop and mobile platforms. @stop()

<!--about-->
@section('about_lead_text') Our designers create beautiful user interfaces that are intelligent and intuitive.. @stop()

@section('about_list_header') HopeSoft is a software company established in 2013. We are commited to develop great software with highest quality of Customer Service. Our development and consulting team comprises country's best System Architects, System Analysts and Programmers with long industry experience. We provide Big data, Mobile & ERP solutions. @stop()
@section('about_list_1') Our designers create beautiful user interfaces .. @stop()
@section('about_list_2') Our designers create beautiful user interfaces .. @stop()
@section('about_list_3') Our designers create beautiful user interfaces .. @stop()
@section('about_list_4') Our designers create beautiful user interfaces .. @stop()
@section('about_list_5') Our designers create beautiful user interfaces .. @stop()


@section('about_second_header') Becessitatibus quae beatae possimus ullam @stop()
@section('about_list_1') Our designers create beautiful user interfaces .. @stop()
@section('about_list_2') Our designers create beautiful user interfaces .. @stop()
@section('about_list_3') Our designers create beautiful user interfaces .. @stop()
@section('about_list_4') Our designers create beautiful user interfaces .. @stop()
@section('about_list_5') Our designers create beautiful user interfaces .. @stop()

@section('about_para_1') Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet. @stop()
@section('about_para_2') Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit? @stop()
@section('about_para_3') Vitae dolores quam magnam accusantium nam, voluptatibus expedita delectus, dolorum odio magni ut nemo nihil ex earum pariatur molestias velit eveniet, facere autem saepe aut. Ut minima itaque porro facere. Cumque vitae autem, dignissimos molestiae necessitatibus culpa aliquam deleniti soluta sunt voluptatibus tenetur, unde dolorem eligendi doloribus quibusdam facere totam. Possimus atque deserunt numquam aliquam magnam, facilis officiis illo alias ipsa voluptas laborum, praesentium eveniet nobis velit voluptatem odio eligendi, corporis et iste distinctio! Repellendus, id, ad. @stop()

@section('about_accordion_1') Our designers create beautiful user interfaces .. @stop()
@section('about_accordion_text_1') Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher. @stop()

@section('about_accordion_2') Our designers create beautiful user interfaces .. @stop()
@section('about_accordion_text_2') Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher. @stop()

@section('about_accordion_3') Our designers create beautiful user interfaces .. @stop()
@section('about_accordion_text_3') Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher. @stop()

<!--service-->
@section('service_name_1') Our designers create beautiful user interfaces .. @stop()
@section('service_text_1') Our designers create beautiful user interfaces .. @stop()

@section('service_name_2') Our designers create beautiful user interfaces .. @stop()
@section('service_text_2') Our designers create beautiful user interfaces .. @stop()

@section('service_name_3') Our designers create beautiful user interfaces .. @stop()
@section('service_text_3') Our designers create beautiful user interfaces .. @stop()

@section('service_name_4') Our designers create beautiful user interfaces .. @stop()
@section('service_text_4') Our designers create beautiful user interfaces .. @stop()

@section('service_name_5') Our designers create beautiful user interfaces .. @stop()
@section('service_text_5') Our designers create beautiful user interfaces .. @stop()

@section('service_name_6') Our designers create beautiful user interfaces .. @stop()
@section('service_text_6') Our designers create beautiful user interfaces .. @stop()

@section('service_name_7') Our designers create beautiful user interfaces .. @stop()
@section('service_text_7') Our designers create beautiful user interfaces .. @stop()

@section('service_name_8') Our designers create beautiful user interfaces .. @stop()
@section('service_text_8') Our designers create beautiful user interfaces .. @stop()

<!--portfolio-->
@section('portfolio_filters')
    @foreach($types as $type )
        <li><a href="#" data-filter=".{{$type->id}}">{{$type->name}}</a></li>
    @endforeach
@stop

@section('portfolio')

@foreach($data as $post)
<div class="col-sm-6 col-md-3 isotope-item {{$post->type_id}}">
								<div class="image-box">
									<div class="overlay-container">
										<img src="{{$path.$post->image}}" alt="">
										<a class="overlay" data-toggle="modal" data-target="#{{$post->id}}">
											<i class="fa fa-search-plus"></i>
											<span>Web Designe</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#">{{$post->title}}</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-1-label">{{$post->title}}</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														{{$post->text}}
													</div>
													<div class="col-md-6">
														<img src="uploads/{{$post->image}}" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
@endforeach
@stop


<!--clients-->


<!--contacts-->
@section('contact_header') Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam magnam natus tempora cumque, aliquam deleniti voluptatibus voluptas. Repellat vel, et itaque commodi iste ab, laudantium voluptas deserunt nobis. @stop()
@section('address') One infinity loop, 54100 @stop()
@section('phone1') +00 1234567890 @stop()
@section('phone2') +00 1234567891 @stop()
@section('email') your@email.com @stop()

<!--social icon-->
