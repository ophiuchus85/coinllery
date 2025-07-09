import { PrivyProvider, usePrivy } from '@privy-io/react-auth';

function AuthStatus() {
  const { ready, authenticated, user, login, logout } = usePrivy();

  if (!ready) return <p>⏳ Carregando...</p>;

  if (authenticated) {
    return (
      <div>
        <p>✅ Logado como: {user.email?.address || user.wallet?.address}</p>
        <button onClick={logout}>Sair</button>
      </div>
    );
  }

  return <button onClick={login}>Entrar com Privy</button>;
}

function App() {
  return (
    <PrivyProvider
      appId="cm9m0670s01uaju0m3nkljuam" // <- seu App ID
      config={{
        loginMethods: ['wallet', 'email'],
        appearance: {
          theme: 'light',
        },
      }}
    >
      <AuthStatus />
    </PrivyProvider>
  );
}

export default App;
