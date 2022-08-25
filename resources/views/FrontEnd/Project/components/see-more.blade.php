@php
$see_more_projects = \App\Models\ProjectModel::all();
@endphp
<section class="see-more-projects">
    <div class="container">
        <h2 class="see-more-projects__title h2">
            Посмотреть еще проекты
        </h2>
        <div class="see-more-projects__slider swiper">
            <ul class="see-more-projects__wrapper swiper-wrapper">
                @foreach($see_more_projects as $project)
                    <li class="see-more-projects__item swiper-slide">
                        @if(count($project->getMedia()) > 0)
                            <img class="see-more-projects__img" src="{{$project->getFirstMedia()->getUrl()}}" alt="{{$project->title}}" width="960"
                                 height="490">
                        @else
                            <img class="see-more-projects__img" src="{{asset('frontend/assets')}}/images/content/workers.png" alt="Наши сотрудники" width="960"
                                 height="490">
                        @endif
                            <p class="see-more-projects__text">
                                {{$project->title}}
                            </p>
                    </li>
                @endforeach
            </ul>
            <div class="see-more-projects__prev swiper-button-prev"></div>
            <div class="see-more-projects__next swiper-button-next"></div>
            <div class="see-more-projects__pagination swiper-pagination"></div>
        </div>
    </div>
</section>
