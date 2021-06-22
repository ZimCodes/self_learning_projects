using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace State
{
    class Gate
    {
        IGateState state;
        public Gate()
        {
            state = new ClosedGateState(this);
        }
        public void Enter()
        {
            this.state.enter();
        }
        public void PayOk()
        {
            this.state.payok();
        }
        public void Pay()
        {
            this.state.pay();
        }
        public void PayFail()
        {
            this.state.payfailed();
        }
        public void ChangeState(IGateState newgate)
        {
            state = newgate;
        }
        public override string ToString()
        {
            return state.ToString();
        }
    }
}
