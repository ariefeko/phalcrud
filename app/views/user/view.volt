<center>
    {{ form('user/cari', 'role': 'form') }}
    <input type="text" name="nama_user" placeholder="cari nama">
    <input type="submit" value="cari">
    </form>
</center>
{% for datas in data %}
{% if loop.first %}
<table border=1 align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan=2>Action</th>
        </tr>
    </thead>
{% endif %}
    <tbody>
        <tr>
            <td>{{ datas.id_user }}</td>
            <td>{{ datas.nama_user }}</td>
            <td>{{ datas.email_user }}</td>
            <td> <a href="{{ url('user/edit/' ~ datas.id_user) }}">Edit</a> </td>
            <td> <a href="{{ url('user/hapus/' ~ datas.id_user) }}" onclick="return confirm('Apakah anda akan menghapus data ? ');">Hapus</a> </td>
        </tr>
    </tbody>
{% if loop.last %}
    </table>
{% endif %}
{% else %}
    No data
{% endfor %}

<center><a href="{{ url('/user') }}">Input data</a> </center>
