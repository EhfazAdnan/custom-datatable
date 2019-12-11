                       @foreach($data as $user)
                        <tr>
                        <td>{{ $user->id }}</th>
                        <td>{{ $user->name }}</th>
                        <td>{{ $user->email }}</th>
                        <td>{{ $user->role->position }}</th>
                        </tr>
                       @endforeach 
                       <tr>
                          <td colspan="3">
                            {{ $data->links() }}  
                          </td>
                       </tr>