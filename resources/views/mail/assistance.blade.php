<p>Hi,</p>
<p>This Request is for {{ $results->agency->name }}</p>
<p>Please see details below:</p>
<p>Name: {{ $results->name }}
    <br>Baranggay: {{ $results->baranggay }}
    <br>City: {{ $results->city }}
    <br>Description:<br>{{ $results->description }}
</p>
<p>Save Your Unique Code:
    <span style="color: red; text-shadow: rgb(136, 136, 136) -4px -3px 13px; font-size: 20px;">
        {{ $results->code }}
    </span>
</p>
