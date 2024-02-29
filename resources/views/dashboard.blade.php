@extends('auth.layouts')

@section('content')




<a href="{{url('/addform')}}" class="btn btn-primary" style="margin-top: 30px; margin-left: 990px">Add Form</a>



<table style="margin-top:50px" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">view</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
                                        $i=1;
                                        ?>

  @foreach($product as $t)
                                    <tr>
                                    <td>{{ $i }}</td>
                                        <td>{{ $t->name }}</td>
                                        <td>{{ $t->price }}</td>
                                        <td>
                                            <a href="{{ url('/edit/'.$t->id  ) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>view</button></a>
                                                                        </td>
                                    </tr>
                                    <?php
                                        $i++;
                                        ?>

                                @endforeach
   

   

  </tbody>
 
</table>

    
@endsection