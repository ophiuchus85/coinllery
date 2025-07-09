import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import PrivyAuth from './PrivyAuth.jsx'
//import PrivySDK from './PrivySDK.jsx'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <PrivyAuth />
  </StrictMode>,
)
