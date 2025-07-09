import React from 'react'
import ReactDOM from 'react-dom/client'
import { getProfile } from "@zoralabs/coins-sdk";
import { PrivyProvider, usePrivy } from '@privy-io/react-auth'
import { PRIVY_APP_ID } from '../_env'

let userProfile;

function AuthStatus() {
  const { ready, authenticated, user, login, logout } = usePrivy()

  if (!ready) return null

  if (authenticated) {

    if(user){
        userProfile = fetchUserProfile(user.wallet?.address);
    }

    return (
      <div>
        <button className="btn btn-sm btn-outline-secondary" onClick={logout}>
          Logout
        </button>
      </div>
    )
  }

  return (
    <button className="btn btn-sm btn-outline-primary" onClick={login}>
      Login
    </button>
  )
}

function LoginStatus() {
  return (
    <PrivyProvider
      appId={PRIVY_APP_ID}
      config={{
        loginMethods: ['wallet'],
        appearance: {
          theme: 'light',
        },
      }}
    >
      <AuthStatus />
    </PrivyProvider>
  )
}

async function fetchUserProfile(walletAddress) {
  const response = await getProfile({
    identifier: walletAddress,
  });
  
  const profile = response?.data?.profile;
  
  if (profile) {

    console.log("Profile Details:");
    console.log("- Handle:", profile.handle);
    console.log("- Display Name:", profile.displayName);
    console.log("- Bio:", profile.bio);
    
    // Access profile image if available
    if (profile.avatar?.medium) {
      console.log("- Profile Image:", profile.avatar.medium);
    }

  } else {
    console.log("Profile not found or user has not set up a profile");
  }
  
  return profile;
}

// Ponto de montagem
const rootEl = document.getElementById('privy-login-root')
if (rootEl) {
  ReactDOM.createRoot(rootEl).render(<LoginStatus />)
}
