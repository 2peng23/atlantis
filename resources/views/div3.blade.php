<div class="d-flex border shadow p-2 justify-content-between">
    <div class="card mt-3 " style="width: 18rem;">
        <img src="images/p3.jfif" class="card-img-top w-100 h-75" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pola</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                the
        </div>
    </div>
    <div class=" w-75 ml-5">
        <form action="{{ route('comment3') }}" wire:navigate method="post" id="comment3">
            @csrf
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment3"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="Add Comment" class="btn btn-success text-dark">
            </div>
        </form>
        <div id="message-div3" class="text-light mx-auto text-center bg-success p-4 rounded mt-2"
            style="display: none;">

        </div>
        <h3>Comments</h3>
        <div class="table-responsive" style="max-height: 120px;">
            <table class="table">
                <tbody id="comments-body3">
                    @foreach ($comment3 as $item)
                        <tr>
                            <td>{{ $item->comment3 }}</td>
                            @auth
                                <td>
                                    <a href="{{ route('edit-comment3', $item->id) }}"><i
                                            class="fas fa-edit text-success"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('delete-comment3', $item->id) }}"
                                        onclick="return confirm('Delete event?')"><i
                                            class="fa fa-trash text-danger"></i></a>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                    <!-- Add more rows here if needed -->
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        // Intercept the form submission
        $('#comment3').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Serialize the form data
            var formData = new FormData(this);

            // Perform an AJAX request
            $.ajax({
                url: "{{ route('comment3') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(result) {
                    $('#comment3')[0].reset();
                    $('#message-div3').css('display', 'block');
                    $('#message-div3').html(result.message); // Message from the controller

                    // Hide the message after 1.5 seconds
                    setTimeout(function() {
                        $('#message-div3').fadeOut(
                            'slow'); // Hide with a fade-out effect 
                    }, 1500); // 1500 milliseconds = 1.5 seconds

                    // Append the new comment to the table
                    $('#comments-body3').append('<tr><td>' + result.comment + '</td></tr>');
                },
                error: function(error) {
                    // Handle any errors here
                    console.log(error);
                }
            });
        });
    });
</script>
