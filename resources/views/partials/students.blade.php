<select class="form-control " name="student_id" id="student_id" required>
    <option>Select Student</option>
    @foreach($students as $student)
    <option value="{{$student->id}}">{{$student->studentName}}</option>
    @endforeach
</select>
