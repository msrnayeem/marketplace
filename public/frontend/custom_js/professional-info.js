$(document).ready(function () {
    let skillIndex = 0; // Initialize an index for skill rows

    $('.add-skill').on('click', function () {
        var newRow = `<tr>
<td><input type="text" name="skills[${skillIndex}][name]" class="form-control skill-name" required></td>
<td>
<select name="skills[${skillIndex}][level]" class="form-select skill-level" required>
    <option value="Beginner">Beginner</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Pro">Pro</option>
</select>
</td>
<td><span class="remove-skill">-</span></td>
</tr>`;
        $('#skillsTable tbody').append(newRow);
        skillIndex++; // Increment the index for the next skill row
    });

    // To remove a skill row
    $('#skillsTable tbody').on('click', '.remove-skill', function () {
        $(this).closest('tr').remove();
    });



    let educationIndex = 0; // Initialize an index for education rows

    $('.add-education').on('click', function () {
        var newRow = `<tr>
<td><input type="text" name="education[${educationIndex}][institute]" class="form-control institute-name" required></td>
<td><input type="text" name="education[${educationIndex}][degree]" class="form-control degree" required></td>
<td><input type="text" name="education[${educationIndex}][year]" class="form-control year" required></td>
<td><span class="remove-education">-</span></td>
</tr>`;
        $('#educationTable tbody').append(newRow);
        educationIndex++; // Increment the index for the next education row
    });

    // To remove an education row
    $('#educationTable tbody').on('click', '.remove-education', function () {
        $(this).closest('tr').remove();
    });
});
