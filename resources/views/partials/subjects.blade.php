<select class="form-control " name="subject_id" id="student_id" required>
    <option>Select Subject</option>
    @foreach($subjects as $subject)
    <option value="{{$subject->id}}">{{$subject->subjectName}}</option>
    @endforeach
</select>
