import { useEffect, useState } from 'react';
import Privy, {LocalStorage} from '@privy-io/js-sdk-core';

const privy = new Privy({
  appId: 'cm9m0670s01uaju0m3nkljuam',
  clientId: 'client-WY5ivKvpZC2G29An7NghK1PoZC3hZNsNwMBRggD3C1wQn',
  supportedChains: ['ethereum'],
  storage: new LocalStorage(),
  onSuccess: (user, jwt) => {
    console.log('Login bem-sucedido!');
    console.log('Usuário:', user);
    console.log('Carteira:', user.wallet?.address);
    console.log('JWT:', jwt);
  },
  onError: (err) => {
    console.error('Erro no login Privy:', err);
  },
});

export default function PrivySDK() {
  const iframeUrl = privy.embeddedWallet.getURL();
  const iframe = document.createElement('iframe');
  iframe.src = iframeUrl;
  document.body.appendChild(iframe);

  privy.setMessagePoster(iframe.contentWindow);
  const listener = (e) => privy.embeddedWallet.onMessage(e.data);
  window.addEventListener('message', listener);

  const [user, setUser] = useState(null);
  const [jwt, setJwt] = useState(null);

  const login = async () => {
    try {
      await privy.login(); // Abre modal do Privy
      const currentUser = await privy.getUser();
      const token = await privy.getAccessToken();

      setUser(currentUser);
      setJwt(token);
    } catch (err) {
      console.error('Erro ao logar:', err);
    }
  };

  const logout = async () => {
    await privy.logout();
    setUser(null);
    setJwt(null);
  };

  useEffect(() => {
    // Checar se o usuário já está logado
    privy.getUser().then(setUser);
    privy.getAccessToken().then(setJwt);
  }, []);

  return (
    <div>
      {!user ? (
        <button onClick={login}>Login com carteira</button>
      ) : (
        <div>
          <p>Conectado como: <strong>{user.wallet?.address}</strong></p>
          <button onClick={logout}>Logout</button>
        </div>
      )}
    </div>
  );
}
