<x-layout>
    <section class="page-section" id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    @if(isset($skills[0]))
                        <h4 class="my-3">{{ $skills[0]->title }}</h4>
                        <p class="text-muted">{{ $skills[0]->description }}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    @if(isset($skills[1]))
                        <h4 class="my-3">{{ $skills[1]->title }}</h4>
                        <p class="text-muted">{{ $skills[1]->description }}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    @if(isset($skills[2]))
                        <h4 class="my-3">{{ $skills[2]->title }}</h4>
                        <p class="text-muted">{{ $skills[2]->description }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-layout>