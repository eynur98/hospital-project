<div class="col-md-12"> 
     @if ($paginator->hasPages())
  
   
        <ul class="post-pagination text-center">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
            
      @else
         
            <li>  <a href="{{ $paginator->previousPageUrl() }}" >   
                <i class="fa fa-caret-left" aria-hidden="true"></i>
            </a></li>
        
      @endif
 
      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
          {{-- "Three Dots" Separator --}}
          @if (is_string($element))
           
                  <a href="">{{ $element }}</a>
               
          @endif
  
          {{-- Array Of Links --}}
          @if (is_array($element))
              @foreach ($element as $page => $url)
                  @if ($page == $paginator->currentPage())
                  <li class="active"><a href="#">{{$page }}</a></li>
                  @else
                  <li><a href="{{ $url }}">{{ $page }}</a></li>
                  @endif
              @endforeach
          @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
      <li class="next">  <a href="{{ $paginator->nextPageUrl() }}" > <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
      @else
          
   
      
      @endif
    </ul>
    

  @endif

</div> 