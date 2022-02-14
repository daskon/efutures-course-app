<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div>
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        
            <div class="mt-6">
                @if (!$enrolled->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Course Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrolled as $course)
                                <tr>
                                <th scope="row">{{$course->code}}</th>
                                <td>{{$course->name}}</td>
                                <td>{{$course->description}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                @if ($enrolled->isEmpty())
                    <div class="alert alert-warning" role="alert">
                       You have not enrolled for courses yet!..
                    </div>
                @endif
            </div>
        </div>
    </div>
    
</div>
