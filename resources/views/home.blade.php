<!DOCTYPE html>
<html lang="en">
<head>
  <title>Free Online Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--nav-->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark  text-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-success" href="javascript:void(0)">{{__('words.websiteName')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#qst">{{trans('words.Questions')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#instructors">{{trans('words.Instructors')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">{{__('words.Contact')}}</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('words.ChooseLanguage')}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a href="{{url('/ar/home')}}" class="dropdown-item" >عربى</a>
                      <a href="{{url('/en/home')}}"  class="dropdown-item">EN</a>
                    </div>
                  </div>
              </li>
            </ul>
      
          </div>
        </div>
      </nav>




<!--nav-->


<!--section 1-->
<section class="bg-dark text-light p-5 text-center text-sm-start p-lg-0 pt-lg-5">

  <div class="container">
      <div class="d-sm-flex ">
          <div class="m-lg-5">
            <h1 class="m-1">{{__('words.OnlineCourses')}} <span class="text-success"> For Free</span></h1>
            <p class="my-4">{{__('words.ProfessionalContentandInstructor')}}</p>

            <button class="btn btn-success btn-lg my-3" data-bs-toggle="modal" data-bs-target="#newmodal">Start Now</button>
          </div>
      
          <img src="{{asset('s1.png')}}" alt="bgimg"class="img-fluid w-25 d-none d-sm-block  m-5" >
      </div>

  </div>
</section>
<!--section 1-->


<!--section 2-->
      <section class="p-5 text-light bg-success ">
          <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
              <h3 class="mb-3 mb-md-0">@lang('words.SignUpForFree')</h3>
              <div class="input-group emailInput">
                <input type="text" class="form-control " placeholder="Enter Email">
                <div class="input-group-append">
                  <button class="btn btn-dark btn-lg" type="button">Button</button>
                </div>
              </div>
            </div>
            
          </div>

      </section>
<!--section 2-->


<!--section 3-->
      <section class="p-5">
          <div class="container text-center">
            <div class="row">

              <div class="col-md p-3">
                  <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                      <h1 class="mb-3">
                        <i class="bi bi-filetype-js"></i>
                      </h1>
                      <h3 class="text-success">{{__('words.javascript')}}</h3>
                      <p class="card-text">
                        {{__('words.courseDescription')}}
                      </p>
                      <a href="#" class="btn btn-success">{{__('words.ReadMore')}}</a>
                    </div>
                  </div>
              </div>

              <div class="col-md p-3">
                <div class="card bg-dark text-light">
                  <div class="card-body text-center">
                    <h1 class="mb-3">
                      <i class="bi bi-filetype-html"></i>
                    </h1>
                    <h3 class="text-success">HTML</h3>
                    <p class="card-text">
                      {{__('words.courseDescription')}}
                    </p>
                    <a href="#" class="btn btn-success">{{__('words.Read More')}}</a>
                  </div>
                </div>
            </div>

            <div class="col-md p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <h1 class="mb-3">
                    <i class="bi bi-filetype-py"></i>
                  </h1>
                  <h3 class="text-success">{{__('words.Python')}}</h3>
                  <p class="card-text">
                    {{__('words.courseDescription')}}
                  </p>
                  <a href="#" class="btn btn-success">{{__('words.Read More')}}</a>
                </div>
              </div>
          </div>


            </div>
          </div>
      </section>

<!--section 3-->

<!--section 4-->
      <section class="p-5">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md">
              <img src="{{asset('se4.png')}}" alt="" class="img-fluid" width="80%">
            </div>
            <div class="col-md p-5">
              <h2 class="text-success">{{__('words.LearnTheFundamentals')}}</h2>
              <p class="lead text-warning">{{__('words.courseDescription')}}.</p>
              <a href="#" class="btn btn-warning text-light">{{__('words.ReadMore')}}</a>
            </div>
          </div>
        </div>
      </section>
<!--section 4-->

<!--section 5-->
      <section class="p-5" id="qst">
        <div class="container">
          <h2 class="text-center">{{__('words.MostAskedQuestions')}}</h2>

          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" >
                  {{__('words.Whatsyourage')}}
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">{{__('words.courseDescription')}}.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                  {{__('words.Wherearayouexactlylocated')}}
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">{{__('words.courseDescription')}}</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" >
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" >
                  {{__('words.Whardoineedtonow')}}'
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">{{__('words.courseDescription')}}.</div>
              </div>
            </div>
          </div>
          <!--accordion-->
        </div>
      </section>
<!--section 5-->


<!--section 6-->
      <section class="p-5 bg-success text-light text-center" id="instructors">
        <div class="container ">
            <h1>Our Instructors</h1>
            <p class="lead p-5" style="display: inline;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa veniam, libero veritatis nihil quod officiis accusantium animi nesciunt ab et?</p>
            <div class="row g-4">
              <div class="col-md-6 col-lg-3 ">
                  <div class="card bg-light text-dark">
                    <div class="card-body">
                      <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="user1" class="rounded-circle mb-3" >
                      <div class="card-title mb-3 text-success">John Doe</div>
                      <div class="card-text">
                        {{__('words.courseDescription')}}
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-6 col-lg-3 ">
                <div class="card bg-light text-dark">
                  <div class="card-body">
                    <img src="https://randomuser.me/api/portraits/women/9.jpg" alt="user1" class="rounded-circle mb-3" >
                    <div class="card-title mb-3 text-success">Anne</div>
                    <div class="card-text">
                      {{__('words.courseDescription')}}
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ">
              <div class="card bg-light text-dark">
                <div class="card-body">
                  <img src="https://randomuser.me/api/portraits/women/11.jpg" alt="user1" class="rounded-circle mb-3" >
                  <div class="card-title mb-3 text-success">Sarah</div>
                  <div class="card-text">
                    {{__('words.courseDescription')}}
                  </div>
                </div>
              </div>
          </div>

          <div class="col-md-6 col-lg-3 ">
            <div class="card bg-light text-dark">
              <div class="card-body">
                <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="user1" class="rounded-circle mb-3" >
                <div class="card-title mb-3 text-success">Micheal</div>
                <div class="card-text">
                  {{__('words.courseDescription')}}
                </div>
              </div>
            </div>
        </div>
            </div>
        </div>
      </section>
<!--section 6-->


<!--section 7-->
      <section class="p-5" id="contact">
        <div class="container">
          <div class="row g-4 justify-content-between">
            <div class="col-md">
              <h2 class="text-center mb-4 text-success">Contact</h2>
              <ul class="list-group list-group-flush lead">
                <li class="list-group-item">
                  <span class="fw-bold">location :</span>Sohag , Egypt.
                </li>
                <li class="list-group-item">
                  <span class="fw-bold">Phone :</span><a href="tel:01118700584" class="text-dark text-decoration-none"> 01118700584.</a>
                </li>
                <li class="list-group-item">
                  <span class="fw-bold">Email :</span><a href="mailto:Doaabakhiet11@gmail.com" class="text-dark text-decoration-none"> Doaabakhiet11@gmail.com</a>
                </li>
              </ul>

            </div>
            <div class="col-md">

              <div style="width: 100%;"><iframe width="90%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=egypt+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">hiking gps</a></iframe></div>
            </div>
          </div>
        </div>
      </section>
<!--section 7-->


<!--footer-->
      <footer class="p-5 bg-success text-center text-light">
          <div class="container">
            <p class="lead">CopyRight &copy; Reserved By <span class="text-warning">Doaa Bakhiet</span></p>
            <a href="#" class=" bottom-0 start-0 p-2 text-light" >
              <i class="bi bi-arrow-up-circle h1"></i>
            </a>
          </div>
      </footer>
<!--footer-->


<!-- Modal -->
<div class="modal fade" id="newmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>