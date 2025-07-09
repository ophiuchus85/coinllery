import { PrivyProvider, usePrivy } from '@privy-io/react-auth';
import { PRIVY_APP_ID } from './_env';

function AuthStatus() {
  const { ready, authenticated, user, login, logout } = usePrivy();

  if (!ready) return <p>Loading...</p>;

  if (authenticated) {
    return (
      <div>
        <p>: {user.email?.address || user.wallet?.address}</p>
        <button onClick={logout}>Sair</button>
      </div>
    );
  }

  return <button onClick={login}>Entrar com Privy</button>;
}

function PrivyAuth() {
  return (
    <PrivyProvider
      appId = {PRIVY_APP_ID}
      config = {{
        loginMethods: ['wallet'],
        appearance: {
          theme: 'light',
        },
      }}
    >
      <AuthStatus />
    </PrivyProvider>
  );
}

export default PrivyAuth;
