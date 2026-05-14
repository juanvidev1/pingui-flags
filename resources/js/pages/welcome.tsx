import { Head, Link, usePage } from '@inertiajs/react';
import { dashboard, login, register } from '@/routes';

export default function Welcome({
  canRegister = true,
}: {
  canRegister?: boolean;
}) {
  const { auth } = usePage().props;

  return (
    <>
      <Head title="Welcome" />
      <header className="flex items-center justify-between space-x-4 p-4">
        <div>Logo</div>
        <nav className="flex items-center space-x-4">
          {auth.user ? (
            <Link href={dashboard()}>Dashboard</Link>
          ) : (
            <>
              <Link href={login()}>Login</Link>
              {canRegister && <Link href={register()}>Register</Link>}
            </>
          )}
        </nav>
      </header>

      <main className="flex min-h-screen flex-col items-center justify-center">
        <h1 className="text-center text-2xl font-bold">
          Welcome to Pingui Flags
        </h1>

        <div className="mt-4 flex min-w-3/4 items-center justify-center space-x-4 rounded-lg border border-gray-500 p-4">
          Contenido tarjeta
        </div>
      </main>
    </>
  );
}
