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
    <div>
      <h1 className="text-2xl">Users Page</h1>
      {users.map((user) => (
        <p key={user.id}>{user.name}</p>
      ))}
    </div>
  );
};

export default Users;
