<!DOCTYPE html>
<html>
<head>
    <title>Clearance Request</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="custom-container">

        <form method="POST" action="{{ route('clearance.submit') }}">
            @csrf

            <div class="input-row">
                <div class="custom-input">
                    <label for="department_id">Department</label>
                    <select id="department_id" name="department_id" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="custom-input">
                    <label for="supervisor_id">Supervisor</label>
                    <select id="supervisor_id" name="supervisor_id" required>
                        <option value="">Select Supervisor</option>
                        @foreach($supervisors as $supervisor)
                            <option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="input-row">
                <div class="custom-input">
                    <label for="user_id">Employee</label>
                    <select id="user_id" name="user_id" required>
                        <option value="">Select Employee</option>
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="button-group">
                <button type="reset" class="btn-cancel">Cancel</button>
                <button type="submit" class="btn-submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
