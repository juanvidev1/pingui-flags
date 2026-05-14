import { Head } from '@inertiajs/react';

type User = {
  id: number;
  name: string;
  email: string;
};

type Props = {
  users: User[];
};

const Users = ({ users }: Props) => {
  return (
    <>
      <Head title="Users" />
      <div>
        <h1 className="text-2xl">Users Page</h1>
        {users.map((user) => (
          <p key={user.id}>{user.name}</p>
        ))}
      </div>
    </>
  );
};

export default Users;
