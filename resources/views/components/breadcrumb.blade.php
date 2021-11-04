<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">
                {{ $title }}
                @if(isset($add))
                <a href="{{route('users.create')}}" class="px-3 py-2 text-light rounded bg-primary">{{ $add }}</a>
            @endif
            @if(isset($add_p))
                <a href="{{route('products.create')}}" class="px-3 py-2 text-light rounded bg-primary">{{ $add_p }}</a>
            @endif
            @if(isset($add_order))
                <a href="{{route('orders.create')}}" class="px-3 py-2 text-light rounded bg-primary">{{ $add_order }}</a>
            @endif
            @if(isset($add_knowledge_base))
                <a href="{{route('knowledge_base.create')}}" class="px-3 py-2 text-light rounded bg-primary">{{ $add_knowledge_base }}</a>
            @endif
            @if(isset($add_category))
                <a href="{{route('category.create')}}" class="px-3 py-2 text-light rounded bg-primary">{{ $add_category }}</a>
            @endif
            @if(isset($addLink))
                {{$addLink}}
            @endif
            </h4>
            
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $li_1 }}</a></li>
                    @if(isset($title))
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    @endif
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->