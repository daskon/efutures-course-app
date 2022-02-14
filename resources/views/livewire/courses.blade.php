<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        {{-- <div>
            <x-jet-application-logo class="block h-12 w-auto" />
        </div> --}}
    
        <div class="mt-8">
            <div class="row">
                <div class="col-sm">
                    <button type="button" wire:click="enrollCoursesModel" class="btn btn-primary">Enroll</button>
                </div>
                <div class="col-sm">
                    <button type="button" wire:click="addCoursesModel" class="btn btn-primary">Add Coruse</button>
                </div>
            </div>
        </div>
    
        <div class="mt-6">
            @if (!$courses->isEmpty())
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Course Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                            <th scope="row">{{$course->code}}</th>
                            <td>{{$course->name}}</td>
                            <td>{{$course->description}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <x-jet-modal wire:model="showEnrollCourseModel">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Course Code</label>
                                <select class="form-control" wire:model.defer="selected_cource">
                                    @if (!$courses->isEmpty())
                                        @foreach ($courses as $course)
                                            <option value="{{$course->id}}">{{$course->code}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="coursename" class="form-label">Course Name</label>
                                <input type="text" id="course_name" name="course_name" class="form-control" readonly>
                            </div>
                            <button type="button" wire:click="enrollToCourse" class="btn btn-primary">Attend</button>
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
                <button type="button" wire:click="$toggle('showEnrollCourseModel')" class="btn btn-light">Close</button>
            </div>
        </x-jet-modal>

        <x-jet-modal wire:model="showAddCourseModel">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Course Code</label>
                                <input type="text" wire:model.defer="course_code" placeholder="course code" class="form-control" id="course_code" name="course_code" required>
                            </div>
                            <div class="mb-3">
                                <label for="coursename" class="form-label">Course Name</label>
                                <input type="text" wire:model.defer="course_name" placeholder="course name" id="course_name" name="course_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="courseinfo" class="form-label">Course Description</label>
                                <textarea id="description" wire:model.defer="description" placeholder="description" name="description" row="3" cols="15" class="form-control" required></textarea>
                            </div>
                            <button type="submit" wire:click="createCourse" class="btn btn-primary">Create Course</button>
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
                <button type="button" wire:click="$toggle('showAddCourseModel')" class="btn btn-light">Close</button>
            </div>
        </x-jet-modal>

    </div>
</div>
